<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getAuth(Request $request){
        $param = ['message' => 'ログインしてください。'];
        return view('login.auth',$param);
    }

    public function postAuth(Request $request){
        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email'=>$email, 'password'=>$password])){
            $msg = 'ログインしました。（'. Auth::user()->name . '）';
        }else{
            $msg = 'ログインに失敗しました。';
        }
        return view('login.auth',['message' => $msg]);
    }
}
