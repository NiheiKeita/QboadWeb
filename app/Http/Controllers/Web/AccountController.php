<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(Request $request){
        return view('www.account.index');
    }
    // public function detail(Request $request){
    //     dump($request->id);
    //     return view('www.account.detail');
    // }

}
