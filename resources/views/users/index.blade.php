@extends('layout')
@section('content')

    <table>
        <thead>
        <tr>
            <th>id</th>
            <th>username</th>
            <th>email</th>
        </tr>
        </thead>
    </table>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
        </tr><br>
    @endforeach
    </tbody>
@endsection
