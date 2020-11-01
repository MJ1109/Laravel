@extends('layout')
@section('content')

<h1>{{$post->title}}</h1>
<p>{{$post->description}}    </p>
<img src="{{$post->image}}", alt="{{$post->image}}">

@if ($post->type==0)
    <p>film</p>
@else
    <p>serie</p>
@endif
<p>This movie was released in {{$post->year}}.</p>
<p> The genre is: {{$genre->genre}}</p>

<p>Rating: <b>{{ $likes }}</b></p>
{{--checks if user is logged in--}}
@if(Auth::check())
    <form method="post" action="/posts/{{ $post->id }}">
        @csrf

        <input type="hidden" name="like" value="1">
        <button type="submit">like!</button>
    </form>
@endif

@can ('editPost', $post)<a href="/posts/{{ $post->id }}/edit">edit this page</a>@endcan

@endsection
