<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\QuestionLike;
use App\Models\Solve;

class QuestionLikeController extends Controller
{
    public function update(Request $request){
        $user = Auth::guard('pro')->getUser();
        // $questionLike = QuestionLike::where('question_id', $request->question_id)->where('user_id', $user->id)->first();
        $questionLike = QuestionLike::firstOrCreate([
            // 'id' => $request->question_like_id,
            'question_id' => $request->question_id,
            'user_id' => $user->id,
        ], [
            'question_id' => $request->question_id,
            'user_id' => $user->id,
        ]);

        if($request->liked == "1"){
            $questionLike->is_active = 1;
        }else{
            $questionLike->is_active = 0;
        }
        $questionLike->save();
        return [
            'liked' => $request->liked,
            'likeds' => $request->liked == "1",
            'request' => $request,
        ];
    }
}
