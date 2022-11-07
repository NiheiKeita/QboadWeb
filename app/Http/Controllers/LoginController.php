<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('www.login.index');
    }
    public function complete(Request $request){
        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];
        if(Auth::guard('www')->attempt($credentials)){
            dd("ok");
        }else{
            dd("ng");
        }

        dd("store");
        return view('www.login.complete');
    }
}
