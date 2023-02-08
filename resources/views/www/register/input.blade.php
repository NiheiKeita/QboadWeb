
@extends('www.layouts.layout')
@section('content')
@include('www.layouts.header')

{{-- <main>
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
</main> --}}

<main>
    <body class="container">
        <div class="c enter-block">
            <div class="container mt-5 col-lg-4">
                <h2 class="side mt-3 text-center">
                    新規登録
                </h2>
                <div class="mt-2 return_button">
                    <a href="javascript:history.back();">
                        <div class="text-start align-items-center">
                            <i class="bi bi-chevron-double-left"></i>
                            戻る
                        </div>
                    </a>
                </div>
                <form method="POST" >
                    @csrf
                    <div class="input_list mt-5">
                        <div class="mt-3 text-start">
                            <label class="form-label">名前</label>
                            @if ($errors->has('name'))
                                <input type="" name="name" class="form-control is-invalid" value="{{old('name')}}" required>
                                <div class="invalid-feedback">
                                    {{$errors->first('name')}}
                                </div>
                            @else
                                <input type="" class="form-control" name="name" value="{{old('name')}}">
                            @endif
                        </div>
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
                            <div class="btn button color_thema_button text-center align-items-center submit_button" data-action="{{route('www.register.complete')}}">
                                登録
                            </div>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</main>
@include('www.layouts.footer')
@endsection
