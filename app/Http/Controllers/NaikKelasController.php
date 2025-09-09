<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataInduk;

class NaikKelasController extends Controller
{
    public function naikKelas(Request $request)
    {
        $siswa = [];
        $kelas = "";
        if ($request->kelas) {
            $kelas = $request->kelas;
            $siswa = DataInduk::where('kelas', $request->kelas)->where('status', 'aktif')->get();
        }
        return view('pages.data-induk.naik-kelas', compact('siswa','kelas'));
    }

    public function storeNaikKelas(Request $request)
    {
        $request->validate([
            'kelas_tujuan'  => 'required|string',
            'siswa'         => 'required|array|min:1',
        ]);

        $kelasTujuan = $request->kelas_tujuan;
        $daftarSiswa = $request->siswa;

        if ($kelasTujuan == "lulus") {
            DataInduk::whereIn('id', $daftarSiswa)->where('status', 'aktif')->update(['status' => 'lulus']);

            return back()->with('success', count($daftarSiswa) . ' siswa berhasil ditandai sebagai lulus.');

        } else if ($kelasTujuan == "keluar") {
            DataInduk::whereIn('id', $daftarSiswa)->where('status', 'aktif')->update(['status' => 'keluar']);

            return back()->with('success', count($daftarSiswa) . ' siswa berhasil ditandai sebagai keluar.');

        } else {
            $sudahTerisi = DataInduk::where('kelas', $kelasTujuan)->where('status', 'aktif')->exists();

            if ($sudahTerisi) {
                return back()->with('error', "Kelas tujuan \"$kelasTujuan\" masih terdapat siswa sebelumnya. Harap naikkan kelas sebelumnya terlebih dahulu.");
            }

            DataInduk::whereIn('id', $daftarSiswa)->where('status', 'aktif')->update(['kelas' => $kelasTujuan]);

            return back()->with('success', count($daftarSiswa) . ' siswa berhasil dinaikkan ke ' . $kelasTujuan);
        }
    }
}
