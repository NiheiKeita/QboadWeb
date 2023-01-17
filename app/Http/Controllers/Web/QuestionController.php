<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        return view('www.question.index');
    }
    public function create(Request $request){
        return view('www.question.create',compact('request'));
    }
    public function solve(Request $request){
        dump($request->id);
        return view('www.question.solve',compact('request'));
    }
}
