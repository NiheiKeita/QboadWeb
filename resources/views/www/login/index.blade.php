
@extends('www.layouts.layout')
@section('content')
@include('www.layouts.header')

<main>
    <body class="container">
        <div class="c enter-block">
            <h2 class="side mt-3">
                ログイン画面
            </h2>
            {{-- <div class="content">
                <form method="POST" action="{{route('www.login.complete')}}" accept-charset="UTF-8">
                    @csrf
                    <p>email</p><input name="email" type="text" value="">
                    <p>Password：<input name="password" type="text" value=""></p>
                    <button type="button" class="btn btn-primary">ログイン</button>
                </form>
            </div> --}}
            <div>
                <form method="POST" action="{{route('www.login.complete')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">メールアドレス</label>
                        <input type="email" class="form-control" name="email">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">パスワード</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">ログイン</button>
                </form>
            </div>
        </div>
    </body>
</main>
@include('www.layouts.footer')
@endsection
