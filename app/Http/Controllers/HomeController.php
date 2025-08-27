<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{DataInduk, DataPegawai, User};
use Hash;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dataInduk = DataInduk::all();
        $dataPegawai = DataPegawai::all();
        return view('home', compact(
            'dataInduk','dataPegawai'
        ));
    }

    public function showProfile(){
        $user = User::find(auth()->user()->id);
        return view('pages.profile.profile',compact('user'));
    }

    public function updatePassword(Request $request){

        $request->validate([
            'email'             => 'required|email|unique:users,email,'. auth()->user()->id,
            'old_password'      => 'required',
            'new_password'      => 'required|string|min:8|same:confirm_password',
            'confirm_password'  => 'required',
        ],[
            'old_password.required'     => 'Password lama harus diisi',
            'new_password.required'     => 'Password baru harus diisi',
            'new_password.min'          => 'Password minimal 8 harus huruf dan angka',
            'new_password.same'         => 'Password baru harus sama dengan konfirmasi password',
            'confirm_password.required' => 'Konfirmasi password baru harus diisi',
        ]);
        $data = $request->all();
        $user = User::find(auth()->user()->id);
        if(!Hash::check($data['old_password'], $user->password)){
            toast('Password lama tidak cocok.','error');
            return redirect('/home');
        }
        $user->update([
            'password'  => Hash::make($data['new_password'])
        ]);
        if($user){
            toast('Password berhasil diupdate!','success');
            return redirect('/home');
        }
        toast('Password gagal diupdate!','error');
        return redirect('/home');
    }
}
