@extends ('layout')
@section('content')

    <div class="row">
        @foreach($newsItems as $newsItem)
            <h2> {{$newsItem['title']}}</h2>
            <p>{{$newsItem['description']}}</p>
            <img src="{{$newsItem['image']}}">
            <a href="{{route('news.show',$newsItem['id'])}}">lees meer</a>
    </div>
    @endforeach
@endsection
