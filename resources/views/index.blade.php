<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($posts as $post)
        <h1>{{$post->author}}</h1>
        <h2>{{$post->rating}}</h2>
        <h3>{{$post->blog_post}}</h3>
    @endforeach
</body>
</html>