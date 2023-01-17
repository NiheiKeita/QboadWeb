

@extends('www.layouts.layout')
@section('content')
@include('www.layouts.header')

<main>
    <article>
        <div class="side">
            <p>Top
            </p>
        </div>

        <a href="{{route('www.register.input')}}">
            <div class="button">
                登録
            </div>
        </a>
        <a href="{{route('www.login.index')}}">
            <div class="button">
                ログイン
            </div>
        </a>
        <div class="content">
            <form method="POST" action="{{route('show')}}" accept-charset="UTF-8">
                @csrf
                <p>名前：<input name="input_text" type="text" value=""></p>
                <input type="submit" value="デフォルト">
            </form>
        </div>
    </article>
</main>
@include('www.layouts.footer')
@endsection
