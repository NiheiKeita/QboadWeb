
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
            ログイン
        </div>
        <div class="content">
            <form method="POST" action="{{route('www.login.complete')}}" accept-charset="UTF-8">
                @csrf
                <p>email：<input name="email" type="text" value=""></p>
                <p>Password：<input name="password" type="text" value=""></p>
                <input type="submit" value="デフォルト">
            </form>
        </div>
    </article>
</body>
</html>
