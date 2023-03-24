<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Question;

class AccountController extends Controller
{
    private $pageName = "account";

    public function index(Request $request){
        $pageName = $this->pageName;
        $user = Auth::guard('pro')->getUser();

        $myQuestions = Question::orderBy('id', 'desc')->get();
        $historyQuestions = Question::orderBy('id', 'desc')->get();
        $myListQuestions = Question::orderBy('id', 'desc')->get();
        $saveQuestions = Question::orderBy('id', 'desc')->get();

        return view('www.account.index',compact('pageName', 'user', 'myQuestions', 'historyQuestions', 'myListQuestions', 'saveQuestions'));
    }
    // public function detail(Request $request){
    //     dump($request->id);
    //     return view('www.account.detail');
    // }

}
