

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
                    問題を解く画面
                </h2>
                <form method="POST" >
                    @csrf
                    <div class="input_list mt-5">
                        <div class="mt-3 text-start">
                            <label class="form-label">{{$question->question_content}}</label>
                        </div>

                    </div>
                    <div class="button_wrapper text_wrapper text-center pb-40 mt-5">
                        <a href="javascript:void(0)">
                            <div class="btn button color_thema_button text-center align-items-center submit_button" data-action="">
                                答える
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
