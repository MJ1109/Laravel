@extends('layout')
@section('content')

    <h1> Update your profile page! </h1>

    <form method="POST" action="/users/{{$user->id}}">
        @csrf
        @method('PUT')

        <div class="field">
            <label class="label" for="name"> edit your name:
                <input
                    class="input @error('name')@enderror"
                    type="text"
                    name="name"
                    value="{{$user->name}}">
            </label>
            @error('name')
            <p class="errorText">{{$errors->first('name') }}</p>
            @enderror<br>

            <label class="label" for="email"> edit your email adress:
                <input
                    class="input @error('email')@enderror"
                    type="text"
                    name="email"
                    value="{{$user->email}}">
            </label>
            @error('email')
            <p class="errorText">{{$errors->first('email') }}</p>
            @enderror
        </div>

        <div>
        <button type="submit">submit!</button>
        </div>
    </form>

    @endsection
