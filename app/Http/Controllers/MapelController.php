<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\Mapel;

class MapelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $data = Mapel::all();
        if($request->ajax()){
            return DataTables::of($data)
            ->addColumn('kelompok', function($row){
                return $row->kelompok ;
            })
            ->addColumn('nama', function($row){
                return $row->nama ;
            })
            ->addColumn('action', function($row){
                $button  = '';
                $button .= '&nbsp;&nbsp;';
                $button .= '<a href="'.route('mapel.edit',$row->id).'" class="btn btn-sm btn-warning btn-icon btn-round"><i class="fas fa-pen-square fa-circle mt-2"></i></a>';

                $button .= '&nbsp;&nbsp;';
                $button .= '<button onclick="deleteItem(this)" data-name="'.$row->nama.'" data-id="'.$row->id.'" class="btn btn-sm btn-danger btn-icon btn-round"><i class="fas fa-trash"></i></button>';

                return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('pages.mapel.index',compact('data'));
    }

    public function create(){

        return view('pages.mapel.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama'      => 'required|unique:mapel,nama',
            'kelompok'  => 'required',
        ]);
        $mapel  = Mapel::create($data);
        if($mapel){
            toast('Mapel berhasil ditambahkan!','success');
            return redirect()->route('mapel.index');
        }
        toast('Mapel gagal ditambahkan!','error');
        return redirect()->route('mapel.index');
    }

    public function edit($id){

        $mapel = Mapel::findOrFail($id);
        return view('pages.mapel.edit',compact('mapel'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nama'      => 'required|unique:mapel,nama,'.$id,
            'kelompok'  => 'required',
        ]);

        $mapel = Mapel::findOrFail($id);
        $mapel->update($data);
        if($mapel){
            toast('Mapel berhasil diperbarui!','success');
            return redirect()->route('mapel.index');
        }
        toast('Mapel gagal diperbarui!','error');
        return redirect()->route('mapel.update', $id);
    }

    public function destroy($id)
    {
        $mapel = Mapel::findOrFail($id);
        $mapel->delete();
        if ($mapel) {
            return response()->json([
                'success' => true,
                'message' => 'Mapel berhasil dihapus!'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Mapel gagal dihapus!'
            ]);
        }
    }
}
