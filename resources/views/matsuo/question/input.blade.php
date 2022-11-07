
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
            問題新規作成
            <form method="POST" action="{{route('matsuo.question.store')}}" accept-charset="UTF-8">
                @csrf
                <p>問題<input name="question" type="text" value=""></p>
                <p>答え1<input name="answer_one" type="text" value=""></p>
                <p>答え2<input name="answer_two" type="text" value=""></p>
                <p>答え3<input name="answer_three" type="text" value=""></p>
                <p>答え4<input name="answer_four" type="text" value=""></p>
                <input type="submit" value="保存">
            </form>
        </div>
    </article>
</body>
</html>
