
@extends('www.layouts.layout')
@section('content')
@include('www.layouts.header')
<main class="question_create_view">
    <body class="container">
        <div class="c enter-block">
            <div class="container mt-5 w-75">
                <h2 class="side mt-3 text-center">
                    マイページ
                </h2>
                <div class="my_data_area">
                    <div class="name_other_area">
                        <div class="name_area d-flex align-items-center center-block">
                            <div class="text-center w-100">{{ $user->user_name }}</div>
                        </div>
                        <div class="other_area">
                            <div class="top_button_area row">
                                <div class="col d-flex align-items-center center-block text-center justify-content-center w-100">
                                    <a href="javascript:void(0)" class="text-decoration kokuban_a">
                                        <div class="text-center w-100">
                                            <div>{{ 0 }}</div>
                                            <div>投稿</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col d-flex align-items-center center-block text-center justify-content-center w-100">
                                    <a href="javascript:void(0)" class="text-decoration kokuban_a">
                                        <div class="text-center w-100">
                                            <div>{{ 0 }}</div>
                                            <div>いいね</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col d-flex align-items-center center-block text-center justify-content-center w-100">
                                    <a href="javascript:void(0)" class="text-decoration kokuban_a">
                                        <div class="text-center w-100">
                                            <div>{{ 0 }}</div>
                                            <div>解答</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="bottom_button_area row">
                                <div class="col d-flex align-items-center center-block text-center justify-content-center w-100">
                                    <a href="javascript:void(0)" class="text-decoration kokuban_a">
                                        <div class="text-center w-100">
                                            <div>{{ 0 }}</div>
                                            <div>フォロワー</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col d-flex align-items-center center-block text-center justify-content-center w-100">
                                    <a href="javascript:void(0)" class="text-decoration kokuban_a">
                                        <div class="">
                                            <div>{{ 0 }}</div>
                                            <div>フォロー中</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="id_area">

                    </div>
                    <div class="button_area">

                    </div>
                </div>
                <div>

                </div>
            </div>
        </div>
    </body>
</main>
@include('www.layouts.footer')
@endsection
