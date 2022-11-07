<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Question;

class MatsuoController extends Controller
{
    public function index(){
        return view('matsuo.login.index');
    }


    public function list(Request $request){
        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];

        $questions = Question::where('user_id', 2)->get();
        // dd($questions->count());
        return view('matsuo.question.list', compact('questions'));
        // if(Auth::guard('www')->attempt($credentials)){
        //     // $user = Auth::guard('www')->getUser();
        //     $questions = Question::where('user_id', 2)->get();
        //     return view('matsuo.question.list',compact('questions'));

        // }else{

        //     return view('matsuo.login.index');
        // }
    }

    public function input(Request $request){

        return view('matsuo.question.input');
    }
    public function store(Request $request){

        // dd("dd");
        // $user = Auth::guard('www')->getUser();

        Question::create([
            'user_id' => 2,
            'question' => $request->question,
            'answer_one' => $request->answer_one,
            'answer_two' => $request->answer_two,
            'answer_three' => $request->answer_three,
            'answer_four' => $request->answer_four,
            'answer_number' => $request->answer_number ?? 1,
        ]);

        $questions = Question::where('user_id', 2)->get();

        return redirect()->route('matsuo.question.list');
        // return view('matsuo.question.list');
    }
}
