<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Maintenance extends Controller
{
    public function index()
    {
        if (getenv('MT_MODE')=="Y") {
            return view('maintenance');
        } else {
            return redirect()->to(base_url());
        }
    }
}