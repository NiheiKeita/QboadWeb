<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    private $pageName = "account";

    public function index(Request $request){
        $pageName = $this->pageName;
        return view('www.account.index',compact('pageName'));
    }
    // public function detail(Request $request){
    //     dump($request->id);
    //     return view('www.account.detail');
    // }

}
