@extends ('layout')
@section('content')

    <div class="row">
        @foreach($newItems as $newItem)
            <h2> {{$newItem['title']}}</h2>
            <p>{{$newItem['description']}}</p>
            <img src="{{$newItem['image']}}">
            <a href="{{route('news.show',$newItem['id'])}}">lees meer</a>
    </div>
    @endforeach
@endsection
