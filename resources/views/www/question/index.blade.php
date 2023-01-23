
@extends('www.layouts.layout')
@section('content')
@include('www.layouts.header')

<main>
    問題一覧
    <a href="{{route('www.question.solve',1)}}">
        <div class="button">
            問題を解く
        </div>
    </a>
    <a href="{{route('www.question.create')}}">
        <div class="button">
            問題作成
        </div>
    </a>
</main>
@include('www.layouts.footer')
@endsection
