<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function register_page (){
        return view('register');
    }

    public function actionregister (Request $request){
        $data = [
            'email' => $request->input('email1'),
            'password' => $request->input('password1'),
            'nama' => $request->input('nama1'),
        ];
        $user = DB::table('user')
        ->where('email',$data['email'])
        ->first();
        if($user){
            Session::flash('error', 'Email Sudah Digunakan');
            return view ('register'); 
        }
        $user = DB::table('user')->insert([
            'email' => $data['email'],
            'password' => $data['password'],
            'nama' => $data['nama'],
        ]);
        return redirect ('login');
    }
}
