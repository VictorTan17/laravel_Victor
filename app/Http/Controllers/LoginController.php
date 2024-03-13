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
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        $user = DB::table('users')
        ->where('email',$data['email'])
        ->where('password',md5($data['password']))
        ->first();
        if($user){
            Session::put('id', $user->id);
            return redirect('index');
        }else{
            Session::flash('error', 'Email atau Password anda salah!');
            return view ('login'); 
        }
    }
    public function logout (){
        Session::forget('id');
        return redirect ('/');
    }
}
