

@extends('www.layouts.layout')
@section('content')
@include('www.layouts.header')

<body class="container">
    <div class="c enter-block">
        <div class="container mt-1 col-lg-4">
            <h2 class="side mt-3 text-center">
                Top
            </h2>
            <div>
                <div class="button_wrapper text_wrapper text-center pb-40 mt-5">
                    <a href="{{route('www.register.input')}}">
                        <div class="btn button color_thema_button text-center align-items-center" >
                            新規登録
                        </div>
                    </a>
                </div>
                <div class="button_wrapper text_wrapper text-center pb-40 mt-5">
                    <a href="{{route('www.login.index')}}">
                        <div class="btn button color_thema_button text-center align-items-center">
                            ログイン
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
@include('www.layouts.footer')
@endsection
