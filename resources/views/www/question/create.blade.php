

@extends('www.layouts.layout')
@section('content')
@include('www.layouts.header')

<main>
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
</main>
@include('www.layouts.footer')
@endsection
