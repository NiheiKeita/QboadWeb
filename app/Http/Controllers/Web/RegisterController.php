<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Hash;

class RegisterController extends Controller
{
    public function index(){
        dump(Auth::guard('pro')->getUser());
        return view('www.register.index');
    }

    public function input(Request $request){

        return view('www.register.input');
    }
    public function complete(RegisterRequest $request){
        User::create([
            'user_name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return view('www.register.complete');
    }
}
