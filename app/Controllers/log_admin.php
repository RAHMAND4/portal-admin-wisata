<?php

namespace App\Controllers;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function index()
    {
        return view('log_admin');
    }
}