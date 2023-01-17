
@extends('www.layouts.layout')
@section('content')
@include('www.layouts.header')

<main>
    ログイン完了
    <a href="{{route('www.question.index')}}">
        <div class="button">
            問題一覧
        </div>
    </a>
</main>
@include('www.layouts.footer')
@endsection
