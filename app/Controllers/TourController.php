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
        $data['tours'] = $tourModel->findAll(); // Ambil semua data tour
        return view('TourTables', $data); // Kirim data ke view
    }

    public function add(){
        $data = $this->request->getPost(); 
        $file = $this->request->getFile('image_url');
        if ($file->isValid() && !$file->hasMoved()) {
            $file->move(WRITEPATH . 'uploads'); 
            $data['image_url'] = base_url('uploads/' . $file->getName()); // Pastikan ini mengembalikan nama file yang benar
            log_message('info', 'File yang diunggah: ' . $data['image_url']); 
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

    public function update() {
        $tourModel = new \App\Models\TourModel();
        $data = $this->request->getPost();

        // Cek apakah ada file gambar yang diunggah
        $file = $this->request->getFile('image_url');
        if ($file && $file->isValid()) {
            // Pindahkan file ke folder uploads
            $file->move(WRITEPATH . 'uploads'); 
            $data['image_url'] = base_url('uploads/' . $file->getName()); // Ambil nama file yang diunggah
            log_message('info', 'File yang diunggah: ' . $data['image_url']);
        } else {
            // Jika tidak ada file yang diunggah, gunakan gambar yang sudah ada
            $existingTour = $tourModel->find($data['tour_id']);
            $data['image_url'] = $existingTour['image_url']; // Ambil URL gambar yang sudah ada
        }

        // Update data di database
        $tourModel->update($data['tour_id'], [
            'nama_wisata' => $data['nama_wisata'],
            'description' => $data['description'],
            'location' => $data['location'],
            'price' => $data['price'],
            'available_seats' => $data['available_seats'],
            'rating' => $data['rating'],
            'image_url' => $data['image_url'], 
        ]);

        return redirect()->to('/tour_tables');
    }

    public function delete($id) {
        $tourModel = new \App\Models\TourModel();
        $tourModel->delete($id);
        return $this->response->setJSON(['success' => true]);
    }

    public function getTour() {
        $tourModel = new \App\Models\TourModel();
        $tours = $tourModel->findAll(); // Ambil semua data tour

        // Tambahkan base_url ke image_url
        foreach ($tours as &$tour) {
            $tour['image_url'] = base_url('uploads/' . $tour['image_url']);
        }

        return $this->response->setJSON($tours); // Kembalikan data dalam format JSON
    }
}