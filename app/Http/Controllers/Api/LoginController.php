<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return [
            "status" => "ng",
        ];

    }

    public function complete(Request $request){
        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];
        if(Auth::guard('www')->attempt($credentials)){
            return [
                "status" => "ok",
            ];
        }else{
            return [
                "status" => "ng",
            ];
        }

    }
}
