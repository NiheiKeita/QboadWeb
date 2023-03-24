
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
                                            <div class="mypage_count">{{ 0 }}</div>
                                            <div class="text_mypage_count">投稿</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col d-flex align-items-center center-block text-center justify-content-center w-100">
                                    <a href="javascript:void(0)" class="text-decoration kokuban_a">
                                        <div class="text-center w-100">
                                            <div class="mypage_count">{{ 0 }}</div>
                                            <div class="text_mypage_count">いいね</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col d-flex align-items-center center-block text-center justify-content-center w-100">
                                    <a href="javascript:void(0)" class="text-decoration kokuban_a">
                                        <div class="text-center w-100">
                                            <div class="mypage_count">{{ 0 }}</div>
                                            <div class="text_mypage_count">解答</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="bottom_button_area row">
                                <div class="col d-flex align-items-center center-block text-center justify-content-center w-100">
                                    <a href="javascript:void(0)" class="text-decoration kokuban_a">
                                        <div class="text-center w-100">
                                            <div class="mypage_count">{{ 0 }}</div>
                                            <div class="text_mypage_count">フォロワー</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col d-flex align-items-center center-block text-center justify-content-center w-100">
                                    <a href="javascript:void(0)" class="text-decoration kokuban_a">
                                        <div class="">
                                            <div class="mypage_count">{{ 0 }}</div>
                                            <div class="text_mypage_count">フォロー中</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="id_area">
                        <a href="javascript:void(0)" class="text-decoration js_unique_user_id">
                            <input id="unique_user_id_copy" type="text" value="{{ '@'.$user->unique_user_id }}" hidden>
                            <div class="">
                                <div>{{ '@'.$user->unique_user_id }}</div>
                            </div>
                        </a>

                    </div>
                    {{-- <div class="button_area row d-flex align-items-center container text-center"> --}}
                    <div class="button_area container text-center align-items-center">
                        <div class="row justify-content-evenly">
                            <div class="button_wrapper text_wrapper text-center pb-40 col-auto">
                                <a href="javascript:void(0)">
                                    <div class="btn button color_thema_button text-center align-items-center submit_button" data-action="{{route('www.register.complete')}}">
                                        プロフィール編集
                                    </div>
                                </a>
                            </div>
                            <div class="button_wrapper text_wrapper text-center pb-40 col-auto">
                                <a href="{{route('www.question.create')}}">
                                    <div class="btn button color_thema_button text-center align-items-center submit_button" data-action="{{route('www.register.complete')}}">
                                        投稿する
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="mypage_tab_switch_area">
                        <div class="sp-fixed-menu">
                            <ul>
                                <li class="selected js_mypage_tab_switch_area_question">
                                    <a href="javascript:void(0)">
                                        <div>投稿</div>
                                    </a>
                                </li>
                                <li class="not_selected js_mypage_tab_switch_area_history">
                                    <a href="javascript:void(0)">
                                        <div>履歴</div>
                                    </a>
                                </li>
                                <li class="not_selected js_mypage_tab_switch_area_mylist">
                                    <a href="javascript:void(0)">
                                        <div>マイリスト</div>
                                    </a>
                                </li>
                                <li class="not_selected js_mypage_tab_switch_area_save">
                                    <a href="javascript:void(0)">
                                        <div>保存</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div style="mypage_tab_area">
                        <div class="js_mypage_tab_area_question">
                            @foreach ($myQuestions as $question)
                                @include('www.layouts.question_field', ['question' => $question])
                            @endforeach
                        </div>
                        <div class="js_mypage_tab_area_history" style="display:none">
                            @foreach ($historyQuestions as $question)
                                @include('www.layouts.question_field', ['question' => $question])
                            @endforeach
                        </div>
                        <div class="js_mypage_tab_area_mylist" style="display:none">
                            @foreach ($myListQuestions as $question)
                                @include('www.layouts.question_field', ['question' => $question])
                            @endforeach
                        </div>
                        <div class="js_mypage_tab_area_save" style="display:none">
                            @foreach ($saveQuestions as $question)
                                @include('www.layouts.question_field', ['question' => $question])
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</main>
@include('www.layouts.footer')
@endsection
