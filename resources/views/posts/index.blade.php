@extends('layout')

@section('content')
<body>


<form id="search" method="POST" action="/search">
    @csrf
    <input type="search" name="search" placeholder="search for keywords in the title">
    <button type="submit">Search!</button>
    <div>
        <label class="label" for="genre"> Genre
            <label class="label">Comedy
                <input type="radio" name="genre" value="1">
            </label>
            <label class="label">Action
                <input type="radio" name="genre" value="2">
            </label>
            <label class="label">Adventure
                <input type="radio" name="genre" value="3">
            </label>
            <label class="label">Crime
                <input type="radio" name="genre" value="4">
            </label>
            <label class="label">Drama
                <input type="radio" name="genre" value="5">
            </label>
            <label class="label">Fantasy
                <input type="radio" name="genre" value="6">
            </label>
            <label class="label">Horror
                <input type="radio" name="genre" value="7">
            </label>
            <label class="label">Thriller
                <input type="radio" name="genre" value="8">
            </label>
            <label class="label">Romance
                <input type="radio" name="genre" value="9">
            </label>
        </label>
    </div>
</form>



<div id="posts">
    @foreach($posts as $post)
        <img src="{{$post->image}}" alt="{{$post->image}}">
        <h3> <a href="/posts/{{$post->id}}"> {{$post->title}}</a></h3>

    @endforeach


</div>
</body>


@endsection

