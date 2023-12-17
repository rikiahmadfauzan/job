<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function proseslogin(Request $request){
        $request->validate([
         'email'=>'required',
         'password' => 'required',
        ],[
         'email.required' => 'Email wajib diisi',
         'password.required' => 'Password wajib diisi',
        ]
     );
     $proseslogin = [
         'email' => $request->email,
         'password' => $request->password,
     ];
     if(Auth::attempt($proseslogin)){
        if(Auth::user()->role == 'admin'){
         return redirect('/admin');
        }elseif(Auth::user()->role == 'alumni'){
         return redirect('/home');
        }
     }else{
         echo "gagal";
     }
     return redirect()->back();

     }

     function login(){
       return view('auth.login');
    }
     function logout(){
        Auth::logout();
        return redirect('/login');
    }

     public function create(Request $request){
        User::create([
            'name' => $request->name,
            'nik' => $request->nik,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect('/login');
     }
}
