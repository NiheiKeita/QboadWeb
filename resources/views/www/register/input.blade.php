登録入力

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
</body>
</html>
