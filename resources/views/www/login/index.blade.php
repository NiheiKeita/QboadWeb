
@extends('www.layouts.layout')
@section('content')
@include('www.layouts.header')

<main>
    <body class="container">
        <div class="c enter-block">
            {{-- <div class="content">
                <form method="POST" action="{{route('www.login.complete')}}" accept-charset="UTF-8">
                    @csrf
                    <p>email</p><input name="email" type="text" value="">
                    <p>Password：<input name="password" type="text" value=""></p>
                    <button type="button" class="btn btn-primary">ログイン</button>
                </form>
            </div> --}}
            {{-- <div class="justify-content-center" class="w-50">
                <form method="POST" action="{{route('www.login.complete')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">メールアドレス</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">パスワード</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">ログイン</button>
                </form>
            </div> --}}
            <div class="container mt-5 col-lg-4">
                <h2 class="side mt-3 text-center">
                    ログイン画面
                </h2>
                <form method="POST" >
                    @csrf
                    <div class="input_list mt-5">
                        <div class="mt-3 text-start">
                            <label class="form-label">メールアドレス</label>
                            @if ($errors->has('email'))
                                <input type="email" name="email" class="form-control is-invalid" value="{{old('email')}}" required>
                                <div class="invalid-feedback">
                                    {{$errors->first('email')}}
                                </div>
                            @else
                                <input type="email" class="form-control" name="email" value="{{old('email')}}">
                            @endif
                        </div>
                        <div class="mt-3 text-start">
                            <label class="form-label">パスワード</label>
                            @if ($errors->has('password'))
                                <input type="password" name="password" class="form-control is-invalid" required>
                                <div class="invalid-feedback">
                                    {{$errors->first('password')}}
                                </div>
                            @else
                                <input type="password" class="form-control" name="password">
                            @endif
                        </div>
                        @if ($errors->has('login'))
                            <div class="mt-3 text-start">
                                <div class="text-danger">
                                    {{$errors->first('login')}}
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="button_wrapper text_wrapper text-center pb-40 mt-5">
                        <a href="javascript:void(0)">
                            <div class="btn btn-outline-primary button primary_line_button text-center align-items-center submit_button" data-action="{{route('www.login.complete')}}">
                                ログイン
                            </div>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</main>
@endsection
