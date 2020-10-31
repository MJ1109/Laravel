@extends('layout')
@section('content')

    <div>
        <h1>Add a new movie!</h1>
    </div>

    <form method="POST" action="/post">
        @csrf

        <div class="field">
            <label class="label" for="title">Movie/show Title:</label>
            <input
                class="input @error('title') @enderror"
                type="text"
                name="title"
                value="{{old('title')}}"><br>

            @error('title')
                <p class="errorText">{{$errors->first('title') }}</p>
            @enderror
        </div>

        <div class="field">
        <label class="label" for="image">Poster of the show/movie</label>
        <input
            class="input @error('image') @enderror"
            type="text"
            name="image"
            value="{{old('image')}}"><br>

            @error('image')
            <p class="errorText">{{$errors->first('image') }}</p>
            @enderror
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
            <input
                class="input @error('year') @enderror"
                type="number"
                name="year"
                value="{{old('year')}}">

            @error('year')
            <p class="errorText">{{$errors->first('year') }}</p>
            @enderror
        </div>

        <div class="field">
            <label for="description" class="label">Description:</label>
            <input class="input @error('description') @enderror"
                   type="text"
                   name="description"
                   value="{{old('description')}}">

            @error('description')
            <p class="errorText">{{$errors->first('description') }}</p>
            @enderror
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
