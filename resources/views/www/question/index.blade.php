
@extends('www.layouts.layout')
@section('content')
@include('www.layouts.header')

<main>
    <body class="container">
        <div class="c enter-block">
            <div class="container mt-1 col-lg-4 question_list_div">
                <h2 class="side mt-3 text-center">
                    問題一覧
                </h2>
                <div >
                    @foreach ($questions as $question)
                        {{-- <a href="{{route('www.question.solve',$question->user->id)}}">
                            <div class="button">
                                {{$question->question_content}}
                                {{$question->user->user_name}}
                            </div>
                        </a> --}}
                        <a href="{{route('www.question.solve',$question->user->id)}}" class="text-decoration-none">
                            <div class="kokuban">
                                <span class="kokuban_title text-center w-100">問題</span>
                                <div class="kokuban_inn">
                                    <p>{{$question->question_content}}</p>
                                    <p class="question_create_user_name text-end">{{$question->user->user_name}}　より</p>
                                </div>
                            </div>
                        </a>
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
