<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Maintenance extends Controller
{
    public function index()
    {
        $session = \Config\Services::session();
        if (!$session->get('devmode')&&getenv('MT_MODE')=='Y') {
            return view('maintenance');
        } else {
            return redirect()->to(base_url());
        }
    }
}