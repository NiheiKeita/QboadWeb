
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
        <div class="side">
            <p>リスト１</p>
            <p>リスト２</p>
            <p>リスト３</p>
            <p>リスト４</p>
            <p>リスト５</p>
        </div>
        <div class="content">
            <form method="POST" action="{{route('show')}}" accept-charset="UTF-8">
                @csrf
                <p>名前：<input name="input_text" type="text" value=""></p>
                <input type="submit" value="デフォルト">
            </form>
        </div>
    </article>
</body>
</html>
