@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>You are logged in! {{Auth::user()->name}}</p>

                    <a href="{{route('create')}}">create a post</a>

{{--                        overview of users' posts--}}
                        @foreach($posts as $post)
                            <img src="{{$post->image}}", alt="{{$post->image}}">
                            <h3> <a href="/post/{{$post->id}}"> {{$post->title}}</a></h3>

                        @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
