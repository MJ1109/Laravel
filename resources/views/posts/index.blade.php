@extends('layout')

@section('content')
<body>
<div id="posts">
    @foreach($posts as $post)
        <img src="{{$post->image}}" alt="{{$post->image}}">
        <h3> <a href="/post/{{$post->id}}"> {{$post->title}}</a></h3>

    @endforeach


</div>

</body>


@endsection

