<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\{DataPegawai,Jabatan,Jurusan,JenisPns};
use Validator;
use App\Exports\{DataPegawaiExport,SinglePegawaiExport};
use Excel;

class DataPegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

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
        return view('pages.data-pegawai.index',compact('data'));
    }

    public function create(){

        $jabatan    = Jabatan::all();
        $jurusan    = Jurusan::all();
        $jenis_pns  = JenisPns::all();
        return view('pages.data-pegawai.create',compact('jabatan','jurusan','jenis_pns'));
    }

    public function store(Request $request){
        $request->validate([
            'nama'              => 'required|unique:data_pegawai,nama',
            'nip'               => 'required|unique:data_pegawai,nip',
            'nik'               => 'required|unique:data_pegawai,nik',
            'nuptk'             => 'required|unique:data_pegawai,nuptk',
            'email'             => 'required|email|unique:data_pegawai,email',
            'jenis_kelamin'     => 'required',
            'tmt_tugas'         => 'required',
            'tmt_pangkat'       => 'required',
            'tmt_pns'           => 'required',
            'tempat_lahir'      => 'required',
            'tanggal_lahir'     => 'required',
            'jurusan_id'        => 'required',
            'posisi_id'         => 'required',
            'jenis_pns'         => 'required',
        ]);

        $micro_id = explode(" ", microtime());
        $micro_id = $micro_id[1].substr($micro_id[0],2,6);

        $data                   = $request->all();
        $data['id']             = $micro_id;
        $jenis_pns              = JenisPns::findOrFail($data['jenis_pns']);
        $umur                   = $this->calDate($data['tanggal_lahir']);
        $pensiun                = (int)$jenis_pns->usia_pensiun - $umur;
        $tmt_pensiun            = $pensiun." TAHUN DARI ".$umur;
        $data['tmt_pensiun']    = $tmt_pensiun;
        $masa_kerja             = $this->calDate($data['tmt_tugas']);
        $data['masa_kerja']     = $masa_kerja;
        $data['created_by']     = auth()->user()->name;
        $data_pegawai           = DataPegawai::create($data);

        if($data_pegawai){
            toast('Data Pegawai berhasil ditambahkan!','success');
            return redirect()->route('data-pegawai.index');
        }
        toast('Data Pegawai gagal ditambahkan!','error');
        return redirect()->route('data-pegawai.index');

    }

    public function edit($id){

        $data       = DataPegawai::findOrFail($id);
        $jabatan    = Jabatan::all();
        $jurusan    = Jurusan::all();
        $jenis_pns  = JenisPns::all();
        return view('pages.data-pegawai.edit',compact('jabatan','jurusan','jenis_pns','data'));

    }

    public function update(Request $request, $id){

        $request->validate([
            'nama'              => 'required|unique:data_pegawai,nama,'.$id,
            'nip'               => 'required|unique:data_pegawai,nip,'.$id,
            'nik'               => 'required|unique:data_pegawai,nik,'.$id,
            'nuptk'             => 'required|unique:data_pegawai,nuptk,'.$id,
            'email'             => 'required|email|unique:data_pegawai,email,'.$id,
            'jenis_kelamin'     => 'required',
            'tmt_tugas'         => 'required',
            'tmt_pangkat'       => 'required',
            'tmt_pns'           => 'required',
            'tempat_lahir'      => 'required',
            'tanggal_lahir'     => 'required',
            'jurusan_id'        => 'required',
            'posisi_id'         => 'required',
            'jenis_pns'         => 'required',
        ]);
        $data                   = $request->all();
        $jenis_pns              = JenisPns::findOrFail($data['jenis_pns']);
        $umur                   = $this->calDate($data['tanggal_lahir']);
        $pensiun                = (int)$jenis_pns->usia_pensiun - $umur;
        $tmt_pensiun            = $pensiun."TAHUN DARI ".$umur;
        $data['tmt_pensiun']    = $tmt_pensiun;
        $masa_kerja             = $this->calDate($data['tmt_tugas']);
        $data['masa_kerja']     = $masa_kerja;
        $data_pegawai           = DataPegawai::findOrFail($id);
        $data_pegawai->update($data);
        if($data_pegawai){
            toast('Data Pegawai berhasil update!','success');
            return redirect()->route('data-pegawai.index');
        }
        toast('Data Pegawai gagal update!','error');
        return redirect()->route('data-pegawai.index');
    }

    public function exportExcel($id){

        $date = date("d-m-Y H:i:s");
        return Excel::download(new SinglePegawaiExport($id), "biodata-pewagai $date.xlsx");
    }

    public function exportMultipleExcel(){

        $date = date("d-m-Y H:i:s");
        return Excel::download(new DataPegawaiExport(), "biodata-pewagai $date.xlsx");
    }

    public function destroy($id){
        $data  = DataPegawai::findOrFail($id)->delete();
        return response()->json([
            'success'   => true,
            'message'   => 'Data pegawai berhasil dihapus'
        ]);
    }

    function calDate($tanggal_lahir){
        $birthDate = new \DateTime($tanggal_lahir);
        $today = new \DateTime("today");
        if ($birthDate > $today) {
            exit("0 tahun 0 bulan 0 hari");
        }
        $y = $today->diff($birthDate)->y;
        $m = $today->diff($birthDate)->m;
        $d = $today->diff($birthDate)->d;
        // return $y." tahun ".$m." bulan ".$d." hari";
        return $y;
    }
}
