

@extends('www.layouts.layout')
@section('content')
@include('www.layouts.header')

<main>
    <body class="container">
        <div class="c enter-block">

            {{-- <div class="mt-2 return_button">
                <a href="javascript:history.back();">
                    <div class="text-start align-items-center">
                        <i class="bi bi-chevron-double-left"></i>
                        一個前に戻る
                    </div>
                </a>
            </div> --}}
            <div class="container mt-5 col-lg-4">
                {{-- <h2 class="side mt-3 text-center">
                    問題を解く画面
                </h2> --}}
                <input id="question_id" value="{{ $question->id }}" hidden>
                {{-- <form method="POST" >
                    @csrf --}}
                {{-- <div class="kokuban">
                    <span class="kokuban_title text-center w-100">問題</span>
                    <div class="kokuban_inn">
                        <p>{{$question->question_content}}</p>
                        <p class="question_create_user_name text-end">{{$question->user->user_name}}　より</p>
                    </div>
                </div> --}}
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
                            <p>{{$question->question_content}}</p>
                            {{-- <p class="question_create_user_name text-end">{{$question->user->user_name}}　より</p> --}}
                        </div>
                    </a>
                    <p class="question_create_user_name text-end">{{$question->user->user_name}}　より</p>
                    <div class="question_icon_area d-inline-flex p-2 bd-highlight w-100 me-3 ms-3">
                        <div class="comment_count_icon_in_quesiton w-25">
                            <i class="bi bi-chat-text"></i>
                            {{$question->question_comments->count()}}
                        </div>
                        <div class="answer_count_icon_in_quesiton w-25">
                            <i class="bi bi-mortarboard"></i>
                            {{$question->solves->count()}}
                        </div>
                        <div class="heart_count_icon_in_quesiton w-25">
                            <i class="bi bi-balloon-heart"></i>
                            {{$question->question_likes->count()}}
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    @foreach ($question->choices as $choice)
                    <div class="button_wrapper text_wrapper text-center pb-40 mt-1">
                        <a href="javascript:void(0)">
                            <div class="btn button color_thema_button text-center align-items-center submit_ajax_button choice_button js_choice_button" data-action="">
                                <input value="{{$choice->is_correct}}" class="is_correct" hidden>
                                <input value="{{$choice->id}}"  class="choice_id" hidden>
                                {{$choice->choice_content}}
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="img_bg_view correct_error_img_remove_button" hidden></div>
                <div class="correct_img correct_error_img_remove_button" hidden>
                    <img src="/public/images/solve_correct.png">
                </div>
                <div class="error_img correct_error_img_remove_button" hidden>
                    <img src="/public/images/solve_error.png">
                </div>
                <div class="">
                    <div class="d-flex justify-content-center" >
                        <div class="button_wrapper text_wrapper text-center pb-40 mt-5">
                            <a href="{{route('www.question.index')}}">
                                <div class="btn button color_thema_button text-center align-items-center">
                                    一覧へ戻る
                                </div>
                            </a>
                        </div>
                        <div class="button_wrapper text_wrapper text-center pb-40 mt-5 ms-3 solved_area" hidden>
                            <a href="{{route('www.question.next',$question->id)}}" class="text-decoration-none">
                                <div class="btn button color_thema_button text-center align-items-center">
                                    <i class="bi bi-shuffle"></i>
                                    　次の問題へ行く
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- </form> --}}
            </div>
        </div>
    </body>
</main>
@include('www.layouts.footer')
@endsection
