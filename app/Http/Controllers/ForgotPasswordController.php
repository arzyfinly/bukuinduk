<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{DataInduk, DataPegawai, User};
use Hash;
use Auth;

class ForgotPasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showForgotpassword(){
        return view('auth.forgot');
    }

    public function forgotPassword(Request $request){
        $request->validate([
            'email'             => 'required|email',
            'new_password'      => 'required|string|min:8|same:confirm_password',
            'confirm_password'  => 'required',
            'code'              => 'required',
        ],[
            'new_password.required'     => 'Password baru harus diisi',
            'new_password.min'          => 'Password minimal 8 harus huruf dan angka',
            'new_password.same'         => 'Password baru harus sama dengan konfirmasi password',
            'confirm_password.required' => 'Konfirmasi password baru harus diisi',
        ]);
        if($request->code != env('CODE_RESET')){
            toast('Code reset tidak valid','error');
            return redirect('/forgot-password');
        }
        $data = $request->all();
        $user = User::where('email',$data['email'])->first();
        if(!$user){
            toast('User tidak ditemukan!','error');
            return redirect('/forgot-password');
        }
        $user->update([
            'password'  => Hash::make($data['new_password'])
        ]);
        if($user){
            toast('Password berhasil diupdate!','success');
            return redirect('/login');
        }
        toast('Password gagal diupdate!','error');
        return redirect('/forgot-password');
    }
}
