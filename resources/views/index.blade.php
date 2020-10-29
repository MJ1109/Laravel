@extends('layout')

@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="posts">
    @foreach($posts as $post)

        <h3> <a href="/post/{{$post->id}}"> {{$post->title}}</a></h3>

    @endforeach

</div>

</body>
</html>

@endsection

