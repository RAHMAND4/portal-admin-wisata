<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel; 
use CodeIgniter\HTTP\ResponseInterface;

class RegistAdmin extends BaseController
{
    public function index()
    {
        return view('regist_admin');
    }

    public function register() 
    {
        $model = new AdminModel();
        
        // Ambil data dari input
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password'); 
        $confirmPassword = $this->request->getPost('confirm_password'); 
        
        // Validasi
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->with('error', 'Email tidak valid'); 
        }
        if (empty($password)) {
            return redirect()->back()->with('error', 'Password tidak boleh kosong'); 
        }
        if ($password !== $confirmPassword) { 
            return redirect()->back()->with('error', 'Password dan konfirmasi tidak cocok'); 
        }
        if ($model->where('email', $email)->first()) {
            return redirect()->back()->with('error', 'Email sudah terdaftar'); 
        }

        $data = [
            'email' => $email, 
            'password' => password_hash($password, PASSWORD_DEFAULT), // Hash password sebelum disimpan
        ];
        
        if (!$model->insert($data)) {
            log_message('error', 'Insert failed: ' . json_encode($model->errors()));
            return redirect()->back()->with('error', 'Gagal menyimpan data');
        }
        
        return redirect()->to('/log_admin')->with('success', 'Pendaftaran berhasil, silahkan login'); 
    }
}