
@extends('www.layouts.layout')
@section('content')
@include('www.layouts.header')

<main>
    <body class="container">
        <div class="c enter-block">
            <div class="container mt-1 col-lg-4 question_list_div">
                {{-- <h2 class="side mt-3 text-center">
                    問題一覧
                </h2> --}}
                <div >
                    @foreach ($questions as $question)
                        <div class="kokuban">
                            <div class="three_dots js_three_dots text-end me-3 ms-3 d-inline-flex p-2 bd-highlight w-100">
                                <div class="text-start ms-3 time_text">
                                    {{ $question->created_at->format('H:i Y/m/d') }}
                                </div>
                                <div class="three_dots js_three_dots text-end">
                                    <i class="bi bi-three-dots"></i>
                                </div>
                            </div>
                            <a href="{{route('www.question.solve',$question->id)}}" class="text-decoration-none kokuban_a">
                                <div class="kokuban_inn text-center">
                                    <p>{{ $question->question_content }}</p>
                                </div>
                            </a>
                            <p class="question_create_user_name text-end">{{ $question->user->user_name }}　より</p>
                            <div class="question_icon_area d-inline-flex p-2 bd-highlight w-100 me-3 ms-3">
                                <div class="comment_count_icon_in_quesiton w-25">
                                    <i class="bi bi-chat-text"></i>
                                    {{ $question->question_comments->count() }}
                                </div>
                                <div class="answer_count_icon_in_quesiton w-25">
                                    <i class="bi bi-mortarboard"></i>
                                    {{ $question->solves->count() }}
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
                    @endforeach
                    <a href="{{route('www.question.create')}}">
                        <i class="bi bi-plus-circle-fill question_create_button"></i>
                    </a>
                </div>
            </div>
        </div>
    </body>
</main>

@include('www.layouts.footer')
@endsection
