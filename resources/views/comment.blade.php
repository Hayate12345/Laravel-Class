<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body style="width: 400px; margin: 20px auto; border: 5px solid black;">
    <div style="border: 5px solid black; padding:20px;">
        <h1>投稿情報</h1>
        <p><label>投稿者名：</label>{{ $post->name }}</p>
        <p><label>投稿内容：</label>{{ $post->content }}</p>
    </div>


    @foreach ($comments as $comment)
        <div>
            <hr>
            <p><label>コメント者名：</label>{{ $comment->name }}</p>
            <p><label>コメント内容：</label>{{ $comment->content }}</p>
            <hr>
        </div>
    @endforeach
</body>

</html>
