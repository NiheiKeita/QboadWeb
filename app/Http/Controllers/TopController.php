<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index(){
        return view('www.index');
    }
    public function show(Request $request){
        return view('www.show',compact('request'));
    }
}
