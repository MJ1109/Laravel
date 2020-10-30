@extends('layout')
@section('content')
    <div>
        <h1>Add a new movie!</h1>
    </div>

    <form method="POST" action="/post">
        @csrf
        <div class="field">
            <label class="label" for="title">Movie/show Title:</label>
            <input type="text" name="title"><br>
        </div>

        <div class="field">
        <label class="label" for="image">Poster of the show/movie</label>
        <input type="text" name="image"><br>
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
            <input type="number" name="year">
        </div>

        <div class="field">
            <label for="description" class="label">Description:</label>
            <input type="text" name="description">
        </div>

        <div>
            <button type="submit">submit!</button>
        </div>


    </form>
@endsection
