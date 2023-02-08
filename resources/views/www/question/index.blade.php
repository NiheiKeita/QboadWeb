
@extends('www.layouts.layout')
@section('content')
@include('www.layouts.header')

<body class="container">
    <div class="c enter-block">
        <div class="container mt-1 col-lg-4">
            <h2 class="side mt-3 text-center">
                問題一覧
            </h2>
            <div>

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
                <a href="{{route('www.question.create')}}">
                    <i class="bi bi-plus-circle-fill question_create_button"></i>
                </a>
            </div>
        </div>
    </div>
</body>
@include('www.layouts.footer')
@endsection
