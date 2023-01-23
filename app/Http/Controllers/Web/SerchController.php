<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SerchController extends Controller
{
    private $pageName = "serch";

    public function index(Request $request){
        $pageName = $this->pageName;
        return view('www.serch.index',compact('pageName'));
    }

}
