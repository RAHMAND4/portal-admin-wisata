<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel; // Ganti UserModel dengan AdminModel
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function index()
    {
        return view('log_admin');
    }

    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password'); 
        $adminModel = new AdminModel(); 
        $admin = $adminModel->where('email', $email)->first(); 
        
        log_message('info', 'Admin: ' . print_r($admin, true));

        if ($admin) {
            log_message('info', 'Password Verify: ' . password_verify($password, $admin['password']));
            
            if (password_verify($password, $admin['password'])) { 

                session()->set('isLoggedIn', true);
                session()->set('adminEmail', $admin['email']); 
                return redirect()->to('/dashboard');
            } else {
                session()->setFlashdata('login_error', 'Email atau password yang dimasukkan salah.'); 
                return redirect()->to('/log_admin'); 
            }
        } else {
            log_message('info', 'Admin not found for email: ' . $email);
            session()->setFlashdata('login_error', 'Email atau password yang dimasukkan salah.'); 
            return redirect()->to('/log_admin'); 
        }
    }
}