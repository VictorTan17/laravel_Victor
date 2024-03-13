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
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|password_uppercase|password_symbol|password_number|min:6',
        ]);
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'name' => $request->input('name'),
        ];
        $user = DB::table('users')
        ->where('email',$data['email'])
        ->first();
        if($user){
            Session::flash('error', 'Email Sudah Digunakan');
            return view ('register'); 
        }
        $user = DB::table('users')->insert([
            'email' => $data['email'],
            'password' => md5($data['password']),
            'name' => $data['name'],
        ]);
        return redirect ('login');
    }
}
