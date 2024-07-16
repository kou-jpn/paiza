<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>paiza BBS</h1>
    <p>{{$message}}</p>
        <p>{{$article->content}}</p>
        <p>
            <a href="/articles">一覧に戻る</a>
        </p>
    
        <div>
            <form action="/articles/{{ $article->id }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align">削除<span class="glyphicon glyphicon-trash"></span></button>
              </form>
        </div>
</body>
</html>