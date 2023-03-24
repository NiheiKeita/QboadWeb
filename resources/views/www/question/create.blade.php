

@extends('www.layouts.layout')
@section('content')
@include('www.layouts.header')

{{-- <main>
    問題作成画面

    <div class="side">
        新規登録
    </div>
    <div class="content">
        <form method="POST" action="{{route('www.question.store')}}" accept-charset="UTF-8">
            @csrf
            <p>内容：<input name="content" type="text" value=""></p>
            @for ($i = 1; $i <= 3; $i++)
                <p>選択肢1<input name="choice[{{$i}}]" type="text" value=""></p>
            @endfor
            <p>解答:<input name="correct" type="text" value=""></p>
            <p>ハッシュタグ:<input name="hash" type="text" value=""></p>
            <input type="submit" value="デフォルト">
        </form>
    </div>
</main> --}}

<main class="question_create_view">
    <body class="container">
        <div class="c enter-block">
            <div class="container mt-5 w-75">
                <h2 class="side mt-3 text-center">
                    問題作成画面
                </h2>
                <div class="mt-2 return_button">
                    <a href="{{route('www.question.index')}}">
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
                            <label class="form-label">問題文</label>
                            <textarea name="question_content" rows="7" class="form-control @if($errors->has('question_content')) is-invalid @endif"  wrap="soft">{{old('question_content')}}</textarea>
                            @if ($errors->has('question_content'))
                                <div class="invalid-feedback">
                                    {{$errors->first('question_content')}}
                                </div>
                            @endif
                        </div>

                        <div class="mt-3 text-star">
                            <label class="form-label">選択肢</label>
                            @for ($i = 1; $i <= 3; $i++)
                            {{-- {{dump($errors->first("choice.$i"))}} --}}
                                <div class="mt-3 ms-3 text-start d-flex">
                                    <input class="correct_radio" id="radio_[{{$i}}]" type="radio" name="correct" value="{{$i}}" @if(old("correct[$i]")=="correct[$i]") checked @elseif($i==1) checked @endif>
                                    <label for="radio_[{{$i}}]">
                                        <img src="/public/images/icon_web.png" with="40" height="40">
                                    </label>

                                    <label class="form-label text-nowrap">{{$i}}つめ</label>
                                    <div class="w-100">
                                        <textarea name="choice[{{$i}}]" rows="2" class="form-control ms-3 @if($errors->has("choice.$i")) is-invalid @endif" wrap="soft">{{old("choice[$i]")}}</textarea>
                                        @if ($errors->has("choice.$i"))
                                            <div class="ms-3 text-star">
                                                <div class="error_message">
                                                    {{$errors->first("choice.$i")}}
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                {{-- <p>選択肢1<input name="choice[{{$i}}]" type="text" value=""></p> --}}
                            @endfor
                        </div>
                        <div class="mt-3 text-start">
                            <label class="form-label">ハッシュタグ</label>
                            @if ($errors->has('hash'))
                                <input name="hash" class="form-control is-invalid" value="{{old('hash')}}" required>
                                <div class="invalid-feedback">
                                    {{$errors->first('hash')}}
                                </div>
                            @else
                                <input type="hash" class="form-control" name="hash" value="{{old('hash')}}">
                            @endif
                        </div>
                    </div>

                    <div class="button_wrapper text_wrapper text-center pb-40 mt-5 mb-5">
                        <a href="javascript:void(0)">
                            <div class="btn button color_thema_button text-center align-items-center submit_button" data-action="{{route('www.question.store')}}">
                                問題作成
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
