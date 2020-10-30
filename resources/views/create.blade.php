@extends('layout')
@section('content')
    <div>
        <h1>Add a new movie!</h1>
    </div>

    <form>
        <div class="field">
            <label class="label" for="title">Movie/show Title:</label>
            <input type="text" id="title" name="title"><br>
        </div>

        <div class="field">
        <label class="label" for="image">Poster of the show/movie</label>
        <input type="file" id="image" name="image"><br>
        </div>

        <div class="field">
            <label class="label" for="type"> Show or Movie?</label>
            <input type="checkbox"
        </div>
    </form>
@endsection
