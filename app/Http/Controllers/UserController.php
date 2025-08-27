<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $data = User::all();
        if($request->ajax()){
            return DataTables::of($data)
            ->addColumn('name', function($row){
                return $row->name ;
            })
            ->addColumn('email', function($row){
                return $row->email ;
            })
            ->addColumn('role', function($row){
                if ($row->role == 1) {
                    return '<span class="badge badge-primary">ADMIN</span>';
                } else {
                    return '<span class="badge badge-warning">GURU</span>';
                }

            })
            ->addColumn('action', function($row){
                $button  = '';
                $button .= '&nbsp;&nbsp;';
                $button .= '<a href="'.route('user.edit',$row->id).'" class="btn btn-sm btn-warning btn-icon btn-round"><i class="fas fa-pen-square fa-circle mt-2"></i></a>';

                $button .= '&nbsp;&nbsp;';
                $button .= '<button onclick="deleteItem(this)" data-name="'.$row->name.'" data-id="'.$row->id.'" class="btn btn-sm btn-danger btn-icon btn-round"><i class="fas fa-trash"></i></button>';

                return $button;
            })
            ->rawColumns(['role','action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('pages.user.index',compact('data'));
    }

    public function create(){

        return view('pages.user.create');
    }

    public function store(Request $request){

        $data = $request->validate([
            'name'              => 'required|unique:users,name',
            'email'             => 'required|email|unique:users,email',
            'password'          => 'required|string|min:8|same:confirm_password',
            'confirm_password'  => 'required',
            'role'              => 'required'
        ]);

        $user  = User::create([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'password'  => Hash::make($data['password']),
            'role'      => $data['role']
        ]);

        if($user){
            toast('User berhasil ditambahkan!','success');
            return redirect()->route('user.index');
        }
        toast('User gagal ditambahkan!','error');
        return redirect()->route('user.index');
    }

    public function edit($id){

        $user = User::findOrFail($id);
        return view('pages.user.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name'              => 'required|unique:users,name,'.$id,
            'email'             => 'required|email|unique:users,email,'.$id,
            'password'          => 'required|string|min:8|same:confirm_password',
            'confirm_password'  => 'required',
        ]);
        $user = User::findOrFail($id);
        $user->update([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'password'  => Hash::make($data['password']),
        ]);

        if($user){
            toast('User berhasil diperbarui!','success');
            return redirect()->route('user.index');
        }
        toast('User gagal diperbarui!','error');
        return redirect()->route('user.edit', $id);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        if ($user) {
            return response()->json([
                'success' => true,
                'message' => 'User berhasil dihapus!'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'User gagal dihapus!'
            ]);
        }
    }
}
