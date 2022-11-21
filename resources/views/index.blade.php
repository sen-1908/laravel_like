<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    @foreach ($posts as $post)
    <p> {{$post->title}} </p>
    <button onclick="like({{$post->id}})">いいね</button>
    @endforeach
   
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src=" {{asset('/js/like.js')}} "></script>

</body>
</html>