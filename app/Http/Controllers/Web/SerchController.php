<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SerchController extends Controller
{
    public function index(Request $request){
        return view('www.serch.index');
    }

}