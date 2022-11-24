<?php

namespace App\Http\Controllers;

use App\Models\M_Suplier;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\validator;
use Illuminate\Contract\Endcryption\DencryptException;

class Registrasi extends Controller
{
    public function index()
    {
        return view('registrasi.registrasi');
    }
    public function registrasi(Request $request)
    {
        $this->validate($request, [
            'nama_usaha' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'no_npwp' => 'required',
            'password' => 'required'
        ]);

        if (
            M_Suplier::create(
                [
                    'nama_usaha' => $request->nama_usaha,
                    'email' => $request->email,
                    'alamat' => $request->alamat,
                    'no_npwp' => $request->no_npwp,
                    'password' => encrypt ($request->password)
                ]
            )
        ){ return redirect('/registrasi')->with('BERHASIL', 'Registrasi Berhasil'); }

        else { return redirect('/registrasi')->with('GAGAL', 'Registrasi Gagal'); }

    }
}
