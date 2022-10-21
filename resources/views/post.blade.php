<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>取得</h1>
    @foreach ($con as $content)
        <div>
            <hr>
            <p><label>名前：</label>{{ $content->id }}</p>
            <p><label>名前：</label>{{ $content->user_id }}</p>
            <p><label>名前：</label>{{ $content->name }}</p>
            <p><label>名前：</label>{{ $content->text }}</p>
            <p><label>名前：</label>{{ $content->created_at }}</p>
            <p><label>名前：</label>{{ $content->updated_at }}</p>
            <hr>
        </div>
    @endforeach
</body>

</html>
