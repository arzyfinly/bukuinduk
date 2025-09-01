<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{DataInduk,Mapel,DataPegawai};
use DataTables;
use PDF;

class GuestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

        $data = DataInduk::all();
        if($request->ajax()){
            return DataTables::of($data)
            ->addColumn('nama', function($row){
                return $row->nama ;
            })
            ->addColumn('nisn', function($row){
                return $row->nisn ;
            })
            ->addColumn('nik', function($row){
                return $row->nik ;
            })
            ->addColumn('kelas', function($row){
                return $row->kelas ;
            })
            ->addColumn('jenis_kelamin', function($row){
                return $row->jenis_kelamin ;
            })
            ->addColumn('action', function($row){
                $button  = '';
                $button .= '<a href="'.route('guest-data-induk.export-pdf',$row->id).'" class="btn btn-sm btn-secondary btn-icon btn-round"><i class="fas fa-print fa-circle mt-2"></i></a>';
                return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('pages.guest.index',compact('data'));
    }

    public function exportPDF($id){

        $data                  = DataInduk::find($id);
        $mapel                 = Mapel::all();
        $data_siswa            = json_decode($data->data_siswa);
        $tempat_tinggal        = json_decode($data->tempat_tinggal);
        $ket_sehat             = json_decode($data->ket_sehat);
        $ket_pendidikan        = json_decode($data->ket_pendidikan);
        $ayah_kandung          = json_decode($data->ayah_kandung);
        $ibu_kandung           = json_decode($data->ibu_kandung);
        $wali                  = json_decode($data->wali);
        $kegemaran             = json_decode($data->kegemaran);
        $ket_pengembangan      = json_decode($data->ket_pengembangan);
        $ket_selesai_pendidikan= json_decode($data->ket_selesai_pendidikan);
        $nilai                 = json_decode($data->nilai,true);
        $pdf = PDF::loadView('pages.data-induk.buku-induk-pdf', compact('data','data_siswa','tempat_tinggal','ket_sehat',
        'ket_pendidikan','ayah_kandung','ibu_kandung','wali','kegemaran','ket_pengembangan','ket_selesai_pendidikan','nilai','mapel'));
        $pdf->setPaper(array(0, 0, 841.89, 1190.55), 'landscape');
        return $pdf->stream('buku-induk'.$data_siswa->nama_lengkap.'.pdf');
    }

    public function dataPegawai(Request $request){

        $data = DataPegawai::all();
        if($request->ajax()){
            return DataTables::of($data)
            ->addColumn('nip', function($row){
                return $row->nip ;
            })
            ->addColumn('nama', function($row){
                return $row->nama ;
            })
            ->addColumn('email', function($row){
                return $row->email ;
            })
            ->addColumn('jenis_kelamin', function($row){
                return $row->jenis_kelamin ;
            })
            ->addColumn('action', function($row){
                $button  = '';
                $button .= '&nbsp;&nbsp;';
                $button .= '<a href="'.route('data-pegawai.single-export',$row->id).'" class="btn btn-sm btn-secondary btn-icon btn-round"><i class="fas fa-print fa-circle mt-2"></i></a>';
                $button .= '&nbsp;&nbsp;';
                $button .= '<a href="'.route('data-pegawai.edit',$row->id).'" class="btn btn-sm btn-warning btn-icon btn-round"><i class="fas fa-pen-square fa-circle mt-2"></i></a>';

                $button .= '&nbsp;&nbsp;';
                $button .= '<button onclick="deleteItem(this)" data-name="'.$row->agama.'" data-id="'.$row->id.'" class="btn btn-sm btn-danger btn-icon btn-round"><i class="fas fa-trash"></i></button>';

                return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('pages.guest.data-pegawai',compact('data'));
    }
}
