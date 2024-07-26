<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class TourController extends BaseController
{
    public function index()
    {
        return view('TourTables'); // Memuat tampilan TourTables
    }
}