<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index(Request $request){
        return view('www.information.index');
    }
    public function detail(Request $request){
        dump($request->id);
        return view('www.information.detail');
    }

}
