<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    private $pageName = "information";

    public function index(Request $request){
        $pageName = $this->pageName;
        return view('www.information.index',compact('pageName'));
    }
    public function detail(Request $request){
        $pageName = $this->pageName;
        // dump($request->id);
        return view('www.information.detail',compact('pageName'));
    }

}
