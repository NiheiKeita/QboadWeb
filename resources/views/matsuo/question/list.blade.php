
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('/public/css/style.css') }}">
  <title></title>
</head>
<body>
    <article>
        <div class="content">
            問題リスト(編集はあとで作ります)<br>
            @foreach ($questions as $question)
                @if ($question->question)
                    {{$question->question}}<br>
                @endif
                @if ($question->answer_one)
                　　・{{$question->answer_one}}<br>
                @endif
                @if ($question->answer_two)
                　　・{{$question->answer_two}}<br>
                @endif
                @if ($question->answer_three)
                　　・{{$question->answer_three}}<br>
                @endif
                @if ($question->answer_four)
                　　・{{$question->answer_four}}<br>
                @endif
                <br>
            @endforeach

            <form method="POST" action="{{route('matsuo.question.input')}}" accept-charset="UTF-8">
                @csrf
                <input type="submit" value="追加">
            </form>
        </div>
    </article>
</body>
</html>



