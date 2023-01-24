
@extends('www.layouts.layout')
@section('content')
@include('www.layouts.header')

<main>
    <h1>
        問題一覧
    </h1>
    <div>
        {{-- <a href="{{route('www.question.solve',1)}}">
            <div class="button">
                問題を解く
            </div>
        </a> --}}
        <div>
            <a href="{{route('www.question.create')}}">
                {{-- <div class="button"> --}}
                    問題作成
                {{-- </div> --}}
            </a>
        </div>

        <ul class="list_basic_design">
            @foreach ($questions as $question)
            <li>
                <a href="{{route('www.question.solve',$question->user->id)}}">
                    <div class="button">
                        {{$question->question_content}}
                        {{$question->user->user_name}}
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</main>
@include('www.layouts.footer')
@endsection
