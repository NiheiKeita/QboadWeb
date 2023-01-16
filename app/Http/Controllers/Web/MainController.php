<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends BaseController
{
    public function index(){
        return view('www.index');
    }
    public function show(Request $request){
        return view('www.show',compact('request'));
    }
}
