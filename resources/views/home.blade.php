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

                    <a href="{{route('posts.create')}}">create a post</a> <br>

{{--                        visibility of the users overview link--}}
                    @can ('viewUsers')<a href="/users">overview of users</a>@endcan

{{--                        overview of users' posts--}}
                        @foreach($posts as $post)
                            <img src="{{$post->image}}" alt="{{$post->image}}">
                            <h3> <a href="/post/{{$post->id}}"> {{$post->title}}</a></h3>


                    @can('editPost', $post)
                        <form method="POST" action="/home">
                            @csrf
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <input type="hidden" name="active" value="@if($post->active)0 @else 1 @endif">

                            <button type="submit"> @if($post->active) on @else off @endif</button>

                        </form>
                     @endcan

                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
