<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\Agama;

class AgamaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $data = Agama::all();
        if($request->ajax()){
            return DataTables::of($data)
            ->addColumn('agama', function($row){
                return $row->agama ;
            })
            ->addColumn('action', function($row){
                $button  = '';
                $button .= '&nbsp;&nbsp;';
                $button .= '<a href="'.route('agama.edit',$row->id).'" class="btn btn-sm btn-warning btn-icon btn-round"><i class="fas fa-pen-square fa-circle mt-2"></i></a>';

                $button .= '&nbsp;&nbsp;';
                $button .= '<button onclick="deleteItem(this)" data-name="'.$row->agama.'" data-id="'.$row->id.'" class="btn btn-sm btn-danger btn-icon btn-round"><i class="fas fa-trash"></i></button>';

                return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('pages.agama.index',compact('data'));
    }

    public function create(){

        return view('pages.agama.create');
    }

    public function store(Request $request){

        $data = $request->validate([
            'agama' => 'required|unique:agama,agama',
        ]);

        $agama  = Agama::create($data);
        if($agama){
            toast('Agama berhasil ditambahkan!','success');
            return redirect()->route('agama.index');
        }
        toast('Agama gagal ditambahkan!','error');
        return redirect()->route('agama.index');
    }

    public function edit($id){

        $agama = Agama::findOrFail($id);
        return view('pages.agama.edit',compact('agama'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'agama' => 'required|unique:agama,agama,'.$id,
        ]);

        $agama = Agama::findOrFail($id);
        $agama->update($data);
        if($agama){
            toast('Agama berhasil diperbarui!','success');
            return redirect()->route('agama.index');
        }
        toast('Agama gagal diperbarui!','error');
        return redirect()->route('agama.update', $id);
    }

    public function destroy($id)
    {
        $agama = Agama::findOrFail($id);
        $agama->delete();
        if ($agama) {
            return response()->json([
                'success' => true,
                'message' => 'Agama berhasil dihapus!'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Agama gagal dihapus!'
            ]);
        }
    }
}
