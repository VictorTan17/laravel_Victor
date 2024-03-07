<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login_page (){
            return view('login');
    }

    public function actionlogin (Request $request){
        $data = [
            'email' => $request->input('email1'),
            'password' => $request->input('password1'),
        ];

        $user = DB::table('user')
        ->where('email',$data['email'])
        ->where('password',$data['password'])
        ->first();
        if($user){
            Session::put('email', $data['email']);
            return redirect('index');
        }else{
            Session::flash('error', 'Email atau Password anda salah!');
            return view ('login'); 
        }
    }
    public function logout (){
        Session::forget('email');
        return redirect ('/');
    }
}
