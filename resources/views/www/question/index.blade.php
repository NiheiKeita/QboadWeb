
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
                        {{-- <a href="{{route('www.question.solve',$question->id)}}" class="text-decoration-none"> --}}
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
                                    {{-- <span class="kokuban_title text-center w-100">問題</span> --}}
                                    {{-- <div class="button_wrapper text_wrapper text-center pb-40 ">
                                        <div class="text-center align-items-center" >
                                            問題
                                        </div>
                                    </div> --}}
                                    <div class="kokuban_inn text-center">
                                        <p>{{$question->question_content}}</p>
                                        <p class="question_create_user_name text-end">{{$question->user->user_name}}　より</p>
                                    </div>
                                </a>
                                <div class="question_icon_area d-inline-flex p-2 bd-highlight w-100 me-3 ms-3">
                                    <div class="comment_count_icon_in_quesiton w-25">
                                        <i class="bi bi-chat-text"></i>
                                    </div>
                                    <div class="answer_count_icon_in_quesiton w-25">
                                        <i class="bi bi-mortarboard"></i>
                                    </div>
                                    <div class="heart_count_icon_in_quesiton w-25">
                                        <i class="bi bi-balloon-heart"></i>
                                    </div>
                                </div>
                            </div>
                        {{-- </a> --}}
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
