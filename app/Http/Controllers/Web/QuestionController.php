<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Question;
use App\Models\Choice;
use App\Models\HashTag;

class QuestionController extends Controller
{
    private $pageName = "question";

    public function index(){
        $pageName = $this->pageName;
        $questions = Question::where()->get();

        return view('www.question.index',compact('pageName','questions'));
    }

    public function create(Request $request){
        $pageName = $this->pageName;
        return view('www.question.create',compact('request','pageName'));
    }

    public function store(Request $request){
        $pageName = $this->pageName;

        // $pieces = explode(" ", $request->hash);
        // dd($pieces);


        // $choiceArray = $request->choice;
        $user = Auth::guard('pro')->getUser();
        $pieces = $this->double_explode(' ', '#', '　', '＃', $request->hash);

        $question = Question::create([
            'user_id' => $user->id,
            'question_content' => $request->content,
        ]);

        foreach ($request->choice as $key => $choice){
            $isCorrectChoice = 0;
            // dump($request->correct);
            // dump($key);
            // dump($key == $request->correct);
            if($key == $request->correct){
                $isCorrectChoice = 1;
            }
            Choice::create([
                'question_id' => $question->id,
                'choice_content' => $choice,
                'is_correct' => $isCorrectChoice,
            ]);
        }
        foreach ($pieces as $key => $hash){
            if(!empty($hash)){
                HashTag::create([
                    'question_id' => $question->id,
                    'hash_tag_content' => $hash,
                ]);
            }
        }

        // dump($array[1]);
        // dd($question);

        return redirect()->route('www.question.index');
        // return view('www.question.create',compact('request','pageName'));
    }

    public function solve(Request $request){
        $pageName = $this->pageName;
        // dump($request->id);
        return view('www.question.solve',compact('request','pageName'));
    }
    public function double_explode($word1, $word2,$word3, $word4, $str) {
        $return1 = array();
        $return2 = array();
        $return = array();

        //分割文字その1で文字列を分割
        $array = explode($word1, $str);

        //各配列を分割文字その2で分割して結合していく
        foreach ($array as $value) {
            $return1 = array_merge($return1, explode($word2, $value));
        }
        foreach ($return1 as $value) {
            $return2 = array_merge($return2, explode($word3, $value));
        }
        foreach ($return2 as $value) {
            $return = array_merge($return, explode($word4, $value));
        }
        return $return;
    }
}
