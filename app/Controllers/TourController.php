<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TourModel;
use CodeIgniter\HTTP\ResponseInterface;

class TourController extends BaseController
{
    public function index()
{
    $tourModel = new \App\Models\TourModel();
    $data['tours'] = $tourModel->findAll();
    
    foreach ($data['tours'] as &$tour) {
        $imagePath = ROOTPATH . 'public/uploads/' . $tour['image_url'];
        log_message('info', 'Checking image: ' . $imagePath . ' - Exists: ' . (file_exists($imagePath) ? 'Yes' : 'No'));
        $tour['image_url'] = base_url('uploads/' . $tour['image_url']);
    }
    
    return view('TourTables', $data);
}

    public function add(){
        $data = $this->request->getPost(); 
        $file = $this->request->getFile('image_url');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/uploads', $newName);
            $data['image_url'] = $newName;
        } else {
            return $this->response->setJSON(['success' => false, 'errors' => ['image_url' => 'File tidak valid.']]);
        }

        log_message('info', 'Data yang diterima: ' . print_r($data, true));

        $tourModel = new \App\Models\TourModel();
        if ($tourModel->insert($data)) {
            log_message('info', 'Data berhasil dimasukkan: ' . print_r($data, true));
            return $this->response->setJSON(['success' => true, 'data' => $data]);
        } else {
            log_message('error', 'Kesalahan saat memasukkan data: ' . json_encode($tourModel->errors()));
            return $this->response->setJSON(['success' => false, 'errors' => $tourModel->errors()]);
        }
    }

    public function update() 
{
    $tourModel = new \App\Models\TourModel();
    $data = $this->request->getPost();

    // Log untuk debugging
    log_message('info', 'Update method called. POST data: ' . print_r($_POST, true));
    log_message('info', 'File upload info: ' . print_r($_FILES, true));

    // Cek apakah ada file gambar yang diunggah
    $file = $this->request->getFile('image_url');
    if ($file && $file->isValid() && !$file->hasMoved()) {
        // Pindahkan file ke folder uploads
        $newName = $file->getRandomName();
        if ($file->move(ROOTPATH . 'public/uploads', $newName)) {
            $data['image_url'] = $newName; // Simpan hanya nama file
        } else {
            log_message('error', 'File upload failed: ' . $file->getErrorString());
            return redirect()->back()->with('error', 'File upload failed: ' . $file->getErrorString());
        }
    } else {
        // Jika tidak ada file yang diunggah, gunakan gambar yang sudah ada
        $existingTour = $tourModel->find($data['tour_id']);
        $data['image_url'] = $existingTour['image_url']; // Gunakan gambar yang sudah ada
    }

    log_message('info', 'File upload details: ' . print_r($file->getErrorString(), true));
    log_message('info', 'File upload path: ' . $file->getTempName());

    // Update data di database
    if ($tourModel->update($data['tour_id'], $data)) {
        return redirect()->to('/tour_tables')->with('success', 'Tour updated successfully');
    } else {
        log_message('error', 'Database update failed: ' . print_r($tourModel->errors(), true));
        return redirect()->back()->withInput()->with('error', 'Failed to update tour');
    }
}
    public function delete($id) {
        $tourModel = new \App\Models\TourModel();
        $tourModel->delete($id);
        return $this->response->setJSON(['success' => true]);
    }

    public function getTour() {
        $tourModel = new \App\Models\TourModel();
    $tours = $tourModel->findAll();
    foreach ($tours as &$tour) {
        $imagePath = ROOTPATH . 'public/uploads/' . $tour['image_url'];
        if (file_exists($imagePath)) {
            $tour['image_url'] = base_url('uploads/' . $tour['image_url']);
        } else {
            $tour['image_url'] = base_url('path/to/placeholder/image.jpg');
            log_message('error', 'Image not found: ' . $imagePath);
        }
    }

    return $this->response->setJSON($tours);
    }

    public function __construct()
    {
        // Tambahkan kode ini di awal method __construct()
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == "OPTIONS") {
            die();
        }
    }
    public function showImage($filename)
    {
        $path = ROOTPATH . 'public/uploads/' . $filename;
        if (file_exists($path)) {
            $mime = mime_content_type($path);
            header('Content-Type: ' . $mime);
            readfile($path);
        } else {
            log_message('error', 'Image not found: ' . $path);
            // Tampilkan gambar placeholder atau berikan respons 404
            header("HTTP/1.0 404 Not Found");
            echo "Image not found: " . $filename;
        }
}
}