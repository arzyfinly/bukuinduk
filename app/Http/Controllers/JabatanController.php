<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\Jabatan;

class JabatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $data = Jabatan::all();
        if($request->ajax()){
            return DataTables::of($data)
            ->addColumn('jabatan', function($row){
                return $row->jabatan ;
            })
            ->addColumn('action', function($row){
                $button  = '';
                $button .= '&nbsp;&nbsp;';
                $button .= '<a href="'.route('jabatan.edit',$row->id).'" class="btn btn-sm btn-warning btn-icon btn-round"><i class="fas fa-pen-square fa-circle mt-2"></i></a>';

                $button .= '&nbsp;&nbsp;';
                $button .= '<button onclick="deleteItem(this)" data-name="'.$row->jabatan.'" data-id="'.$row->id.'" class="btn btn-sm btn-danger btn-icon btn-round"><i class="fas fa-trash"></i></button>';

                return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('pages.jabatan.index',compact('data'));
    }

    public function create(){

        return view('pages.jabatan.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'jabatan' => 'required|unique:jabatan,jabatan',
        ]);
        $jabatan  = Jabatan::create($data);
        if($jabatan){
            toast('Jabatan berhasil ditambahkan!','success');
            return redirect()->route('jabatan.index');
        }
        toast('Jabatan gagal ditambahkan!','error');
        return redirect()->route('jabatan.index');
    }

    public function edit($id){

        $jabatan = Jabatan::findOrFail($id);
        return view('pages.jabatan.edit',compact('jabatan'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'jabatan' => 'required|unique:jabatan,jabatan,'.$id,
        ]);

        $jabatan = Jabatan::findOrFail($id);
        $jabatan->update($data);
        if($jabatan){
            toast('Jabatan berhasil diperbarui!','success');
            return redirect()->route('jabatan.index');
        }
        toast('Jabatan gagal diperbarui!','error');
        return redirect()->route('jabatan.update', $id);
    }

    public function destroy($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        $jabatan->delete();
        if ($jabatan) {
            return response()->json([
                'success' => true,
                'message' => 'Jabatan berhasil dihapus!'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Jabatan gagal dihapus!'
            ]);
        }
    }
}
