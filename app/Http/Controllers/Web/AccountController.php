<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    private $pageName = "account";

    public function index(Request $request){
        $pageName = $this->pageName;
        $user = Auth::guard('pro')->getUser();

        return view('www.account.index',compact('pageName', 'user'));
    }
    // public function detail(Request $request){
    //     dump($request->id);
    //     return view('www.account.detail');
    // }

}
