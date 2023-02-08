
@extends('www.layouts.layout')
@section('content')
@include('www.layouts.header')

<main>
    <body class="container">
        <div class="c enter-block">

            <div class="mt-2 return_button">
                <a href="javascript:history.back();">
                    <div class="text-start align-items-center">
                        <i class="bi bi-chevron-double-left"></i>
                        戻る
                    </div>
                </a>
            </div>
            <div class="container mt-5 col-lg-4">
                <h2 class="side mt-3 text-center">
                    ログイン
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
                            <div class="btn button color_thema_button text-center align-items-center submit_button" data-action="{{route('www.login.complete')}}">
                                ログイン
                            </div>
                        </a>
                    </div>
                </form>

                <div class="mt-3">
                    <a href="javascript:void(0)">
                        <div class="text-center align-items-center" data-action="">
                            パスワードを忘れた方はこちら
                        </div>
                    </a>
                </div>

                <div class="mt-2">
                    <a href="{{route('www.register.input')}}">
                        <div class="text-center align-items-center" data-action="">
                            新規登録
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </body>
</main>
@endsection
