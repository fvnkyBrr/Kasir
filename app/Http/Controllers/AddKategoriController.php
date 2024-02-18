<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddKategoriController extends Controller
{
    public function index()
    {
        return view('kategori.addkategori');
    }
}
