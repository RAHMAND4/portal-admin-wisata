<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Logika untuk memeriksa apakah pengguna sudah login
        if (!session()->get('isLoggedIn')) {
            log_message('info', 'User not logged in, redirecting to /login');
            return redirect()->to('/log_admin');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak ada logika setelah
    }
}