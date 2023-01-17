
@extends('www.layouts.layout')
@section('content')
@include('www.layouts.header')

<main>
    <article>
        <div class="side">
            ログイン
        </div>
        <div class="content">
            <form method="POST" action="{{route('www.login.complete')}}" accept-charset="UTF-8">
                @csrf
                <p>email：<input name="email" type="text" value=""></p>
                <p>Password：<input name="password" type="text" value=""></p>
                <input type="submit" value="デフォルト">
            </form>
        </div>
    </article>
</main>
@include('www.layouts.footer')
@endsection
