<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return ('Selamat datang');
    }

    public function about()
    {
        return ('Andy Nugraha Putra & 22411720006');
    }

    public function articles($id)
    {
        return ('Halaman artikel dengan id ' . $id);
    }
}
