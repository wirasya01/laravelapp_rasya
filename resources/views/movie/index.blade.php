@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{$movie->coverUrl}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$movie->title}}</h5>
                  <p class="card-text">{{$movie->description}}</p>
                  <p>Jumlah View: {{$movie->view}}</p>
                  <p><a href="{{$movie->trailerUrl}}">Link</a></p>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
