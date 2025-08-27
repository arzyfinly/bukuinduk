<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $data = Jurusan::all();
        if($request->ajax()){
            return DataTables::of($data)
            ->addColumn('jurusan', function($row){
                return $row->jurusan ;
            })
            ->addColumn('action', function($row){
                $button  = '';
                $button .= '&nbsp;&nbsp;';
                $button .= '<a href="'.route('jurusan.edit',$row->id).'" class="btn btn-sm btn-warning btn-icon btn-round"><i class="fas fa-pen-square fa-circle mt-2"></i></a>';

                $button .= '&nbsp;&nbsp;';
                $button .= '<button onclick="deleteItem(this)" data-name="'.$row->jurusan.'" data-id="'.$row->id.'" class="btn btn-sm btn-danger btn-icon btn-round"><i class="fas fa-trash"></i></button>';

                return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('pages.jurusan.index',compact('data'));
    }

    public function create(){

        return view('pages.jurusan.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'jurusan' => 'required|unique:jurusan,jurusan',
        ]);
        $jurusan  = Jurusan::create($data);
        if($jurusan){
            toast('Jurusan berhasil ditambahkan!','success');
            return redirect()->route('jurusan.index');
        }
        toast('Jurusan gagal ditambahkan!','error');
        return redirect()->route('jurusan.index');
    }

    public function edit($id){

        $jurusan = Jurusan::findOrFail($id);
        return view('pages.jurusan.edit',compact('jurusan'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'jurusan' => 'required|unique:jurusan,jurusan,'.$id,
        ]);

        $jurusan = Jurusan::findOrFail($id);
        $jurusan->update($data);
        if($jurusan){
            toast('Jurusan berhasil diperbarui!','success');
            return redirect()->route('jurusan.index');
        }
        toast('Jurusan gagal diperbarui!','error');
        return redirect()->route('jurusan.update', $id);
    }

    public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->delete();
        if ($jurusan) {
            return response()->json([
                'success' => true,
                'message' => 'Jurusan berhasil dihapus!'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Jurusan gagal dihapus!'
            ]);
        }
    }
}
