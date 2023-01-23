
@extends('www.layouts.layout')
@section('content')
@include('www.layouts.header')

<main>
    アカウント
    <a href="{{route('www.information.detail',1)}}">
        <div class="button">
            お知らせ詳細
        </div>
    </a>
</main>
@include('www.layouts.footer')
@endsection
