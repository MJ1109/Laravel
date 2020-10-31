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
    <p> The genre that's appropriate is: {{$post->genre_id}}</p>

    <a href="/post/{{ $post->id }}/edit">edit this page</a>


@endsection
