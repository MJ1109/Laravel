

@extends('layout')
@section('content')

@foreach($users as $user)


    <h1>{{$user->id}}{{$user->name}}</h1>
    <p>{{$user->email}}</p>

@endforeach
