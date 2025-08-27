<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConfigKepalaSekolah;

class ConfigKepalaSekolahController extends Controller
{
    public function index()
    {
        $config = ConfigKepalaSekolah::first();
        return view('pages.config-kepala-sekolah.index', compact('config'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama'      => 'required',
            'jabatan'   => 'required',
            'nip'       => 'required',
        ]);

        $config = ConfigKepalaSekolah::first();
        $config->update($data);

        if($config){
            toast('Konfigurasi berhasil disimpan!','success');
            return redirect()->route('config-kepala-sekolah.index');
        }
        toast('Konfigurasi gagal disimpan!','error');
        return redirect()->route('config-kepala-sekolah.index');
    }
}
