<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function index(){
        return view('www.login.index');
    }
    public function complete(LoginRequest $request){
        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];
        if(Auth::guard('pro')->attempt($credentials, false)){
            return redirect()->route('www.question.index');
        }else{
            return back()->withErrors(array('login' => 'メールアドレスかパスワードが間違っています。'))->withInput();
        }

    }
    public function logout(){
        Auth::guard('pro')->logout();
        return redirect()->route('www.login.index');
    }
}
