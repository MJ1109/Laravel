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
    <div class="field">
        <label class="label" for="genre"> Genre </label>

        <input type="radio" name="genre" value="1">
        <label class="label">Comedy</label>

        <input type="radio" name="genre" value="2">
        <label class="label">Action</label>

        <input type="radio" name="genre" value="3">
        <label class="label">Adventure</label>

        <input type="radio" name="genre" value="4">
        <label class="label">Crime</label>

        <input type="radio" name="genre" value="5">
        <label class="label">Drama</label>

        <input type="radio" name="genre" value="6">
        <label class="label">Fantasy</label>

        <input type="radio" name="genre" value="7">
        <label class="label">Horror</label>

        <input type="radio" name="genre" value="8">
        <label class="label">Thriller</label>

        <input type="radio" name="genre" value="9">
        <label class="label">Romance</label>

    </div>


    <div>
        <button type="submit">submit!</button>
    </div>



</form>

@endsection
