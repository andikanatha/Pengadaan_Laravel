<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registrasi extends Controller
{
    public function index()
    {
        return view('registrasi.registrasi');
    }
    public function registrasi(Request $request)
    {
    }
}
