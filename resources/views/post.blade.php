@extends('layout')

@section('content')
<h1>{{$post->title}}</h1>
    <p>{{$post->description}}    </p>

@if ($post->type==0)
    <p>film</p>
@else
    <p>serie</p>
@endif

@endsection
