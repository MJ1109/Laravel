@extends('layout')
@section('content')

    <div>
        <h1>Add a new movie!</h1>
    </div>

    <form method="POST" action="/post">
        @csrf

        <div class="field">
            <label class="label" for="title">Movie/show Title:
            <input
                class="input @error('title') @enderror"
                type="text"
                name="title">
                <br>
            </label>
            @error('title')
                <p class="errorText">{{$errors->first('title') }}</p>
            @enderror

        </div>

        <div class="field">
        <label class="label" for="image">Poster of the show/movie
        <input
            class="input @error('image') @enderror"
            type="text"
            name="image"><br>
            </label>
            @error('image')
            <p class="errorText">{{$errors->first('image') }}</p>
            @enderror
        </div>

        <div class="field">
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
                    class="input @error('year') @enderror"
                    type="number"
                    name="year">
            </label>
            @error('year')
            <p class="errorText">{{$errors->first('year') }}</p>
            @enderror
        </div>

        <div class="field">
            <label for="description" class="label">Description:
                <input class="input @error('description') @enderror"
                       type="text"
                       name="description">
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
