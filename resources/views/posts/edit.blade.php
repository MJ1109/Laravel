@extends('layout')
@section('content')


<h1>update the content</h1>

<form method="POST" action="/post/{{ $post->id }}">
    @csrf
    @method('PUT')

    <div class="field">
        <label class="label" for="title">Movie/show Title:
        <input
            class="input @error('title')@enderror"
            type="text"
            name="title"
            value="{{$post->title}}">
        </label>
        @error('title')
        <p class="errorText">{{$errors->first('title') }}</p>
        @enderror

        <br>
    </div>

    <div class="field">
        <label class="label" for="image">Poster of the show/movie
            <input class="input @error('image')@enderror"
                   type="text" name="image" value="{{$post->image}}">
        </label>
        @error('image')
        <p class="errorText">{{$errors->first('image') }}</p>
        @enderror
        <br>
    </div>

    <div class="custom-radio">
        <label class="label" for="type"> Show or Movie?
            <label class="label">movie
                <input type="radio" name="type" value="0">
        </label>

            <label type="label">serie
                <input type="radio" name="type" value="1">
            </label>
        </label>
        @error('type')
        <p class="errorText">{{$errors->first('type') }}</p>
        @enderror
    </div>

    <div class="field">
        <label class="label" for="year">Release year
            <input
                class="input @error('year')@enderror"
                type="number"
                name="year"
                value="{{$post->year}}">
        </label>
        @error('year')
        <p class="errorText">{{$errors->first('year') }}</p>
        @enderror
    </div>

    <div class="field">
        <label for="description" class="label">Description:
            <input
                class="input @error('description')@enderror"
                type="text"
                name="description"
                value="{{$post->description}}">
        </label>
        @error('description')
        <p class="errorText">{{$errors->first('description') }}</p>
        @enderror
    </div>
    <div class="custom-radio">
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
        @error('genre')
        <p class="errorText">{{$errors->first('genre') }}</p>
        @enderror

    </div>


    <div>
        <button type="submit">submit!</button>
    </div>



</form>

@endsection
