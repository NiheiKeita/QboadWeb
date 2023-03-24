<div class="kokuban">
    <div class="three_dots js_three_dots text-end me-3 ms-3 d-inline-flex p-2 bd-highlight w-100">
        <div class="text-start ms-3 time_text">
            {{ $question->created_at->format('H:i Y/m/d') }}
        </div>
        <div class="three_dots js_three_dots text-end mod_dropnavi">
            <a href="javascript:void(0)"  class="text-decoration-none kokuban_a">
                <i class="bi bi-three-dots"></i>
            </a>
            @include('www.layouts.three_dots_menu')
        </div>
    </div>
    <a href="{{route('www.question.solve',$question->id)}}" class="text-decoration-none kokuban_a">
        <div class="kokuban_inn text-center">
            <p>{{ $question->question_content }}</p>
        </div>
    </a>
    <p class="question_create_user_name text-end">{{ $question->user->user_name }}　より</p>
    <div class="question_icon_area d-inline-flex p-2 bd-highlight w-100 me-3 ms-3">
        <div class="comment_count_icon_in_quesiton w-25 remark_div">
            <a href="javascript:void(0)" class="text-decoration kokuban_a">
                <i class="bi bi-chat-text"></i>
                {{ $question->question_comments->count() }}
                <span class="remark">コメントの合計数</span>
            </a>
        </div>
        <div class="answer_count_icon_in_quesiton w-25 remark_div">
            <a href="javascript:void(0)" class="text-decoration kokuban_a">
                <i class="bi bi-mortarboard"></i>
                {{ $question->solves->count() }}
                <span class="remark">今までに解かれた合計数</span>
            </a>
        </div>
        <?php
            $islike = false;
            if(!empty($question->question_likes->where('user_id',$user->id)->first()) && $question->question_likes->where('user_id',$user->id)->first()->is_active == 1){
                $islike = true;
            }
        ?>
        <div class="heart_count_icon_in_quesiton w-25 @if($islike) liked @else noliked @endif">
            <a href="javascript:void(0)" class="text-decoration-none kokuban_a">
                <i class="bi bi-balloon-heart js_heart_icon_in_quesiton not_liked_icon"></i>
                <i class="bi bi-balloon-heart-fill js_heart_icon_in_quesiton liked_icon"></i>
            </a>
            <input value="{{ $question->question_like_count }}" class="js_like_count_num" hidden/>
            <input value="{{ $question->id }}" class="js_question_id" hidden/>
            <input value="{{ optional($question->question_likes->where('user_id',$user->id)->first())->id }}" class="js_question_like_id" hidden/>
            <p class="js_like_count">
                {{ $question->question_like_count }}
            </p>
        </div>
    </div>
</div>
