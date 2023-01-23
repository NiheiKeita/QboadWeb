<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    private $pageName = "question";

    public function index(){
        $pageName = $this->pageName;
        return view('www.question.index',compact('pageName'));
    }
    public function create(Request $request){
        $pageName = $this->pageName;
        return view('www.question.create',compact('request','pageName'));
    }
    public function solve(Request $request){
        $pageName = $this->pageName;
        // dump($request->id);
        return view('www.question.solve',compact('request','pageName'));
    }
}
