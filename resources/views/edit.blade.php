@extends('layout')
@section('content')


<h1>update the content</h1>

<form method="POST" action="/post/{{ $post->id }}">
    @csrf
    @method('PUT')

    <div class="field">
        <label class="label" for="title">Movie/show Title:</label>
        <input type="text" name="title" value="{{$post->title}}"><br>
    </div>

    <div class="field">
        <label class="label" for="image">Poster of the show/movie</label>
        <input type="text" name="image" value="{{$post->image}}"><br>
    </div>

    <div class="field">
        <label class="label" for="type"> Show or Movie?</label>

        <input type="radio" name="type" value="0">
        <label class="label">movie</label>

        <input type="radio" name="type" value="1">
        <label type="label">serie</label>
    </div>

    <div class="field">
        <label class="label" for="year">Release year</label>
        <input type="number" name="year" value="{{$post->year}}">
    </div>

    <div class="field">
        <label for="description" class="label">Description:</label>
        <input type="text" name="description" value="{{$post->description}}">
    </div>

    <div>
        <button type="submit">submit!</button>
    </div>



</form>

@endsection
