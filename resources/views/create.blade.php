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

        <div>
            <button type="submit">submit!</button>
        </div>


    </form>
@endsection
