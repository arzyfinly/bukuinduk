<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisPns;
use DataTables;
use Auth;

class JenisPnsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $data = JenisPns::all();
        if($request->ajax()){
            return DataTables::of($data)
            ->addColumn('jenis_pns', function($row){
                return $row->jenis_pns ;
            })
            ->addColumn('usia_pensiun', function($row){
                return $row->usia_pensiun ;
            })
            ->addColumn('action', function($row){
                $button  = '';
                $button .= '&nbsp;&nbsp;';
                $button .= '<a href="'.route('jenis-pns.edit',$row->id).'" class="btn btn-sm btn-warning btn-icon btn-round"><i class="fas fa-pen-square fa-circle mt-2"></i></a>';

                $button .= '&nbsp;&nbsp;';
                $button .= '<button onclick="deleteItem(this)" data-name="'.$row->jabatan.'" data-id="'.$row->id.'" class="btn btn-sm btn-danger btn-icon btn-round"><i class="fas fa-trash"></i></button>';

                return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('pages.jenis-pns.index',compact('data'));
    }

    public function create(){

        return view('pages.jenis-pns.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'jenis_pns'         => 'required|unique:jenis_pns,jenis_pns',
            'usia_pensiun'      => 'required|unique:jenis_pns,usia_pensiun',
        ]);

        $jenis_pns  = JenisPns::create($data);
        if($jenis_pns){
            toast('Jenis PNS berhasil ditambahkan!','success');
            return redirect()->route('jenis-pns.index');
        }
        toast('Jenis PNS gagal ditambahkan!','error');
        return redirect()->route('jenis-pns.index');
    }

    public function edit($id){

        $jenis_pns = JenisPns::findOrFail($id);
        return view('pages.jenis-pns.edit',compact('jenis_pns'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'jenis_pns'         => 'required|unique:jenis_pns,jenis_pns,'.$id,
            'usia_pensiun'      => 'required|unique:jenis_pns,usia_pensiun,'.$id,
        ]);

        $jenis_pns  = JenisPns::findOrFail($id);
        $jenis_pns->update($data);
        if($jenis_pns){
            toast('Jenis PNS berhasil diperbarui!','success');
            return redirect()->route('jenis-pns.index');
        }
        toast('Jenis PNS gagal diperbarui!','error');
        return redirect()->route('jenis-pns.update', $id);
    }

    public function destroy($id){

        $jenis_pns = JenisPns::findOrFail($id);
        $jenis_pns->delete();
        if ($jenis_pns) {
            return response()->json([
                'success' => true,
                'message' => 'Jenis PNS berhasil dihapus!'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Jenis PNS gagal dihapus!'
            ]);
        }
    }
}
