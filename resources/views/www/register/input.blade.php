
@extends('www.layouts.layout')
@section('content')
@include('www.layouts.header')

<main>
    <article>
        <div class="side">
            新規登録
        </div>
        <div class="content">
            <form method="POST" action="{{route('www.register.complete')}}" accept-charset="UTF-8">
                @csrf
                <p>名前：<input name="name" type="text" value=""></p>
                <p>Email<input name="email" type="text" value=""></p>
                <p>Password：<input name="password" type="text" value=""></p>
                <input type="submit" value="デフォルト">
            </form>
        </div>
    </article>
</main>
@include('www.layouts.footer')
@endsection
