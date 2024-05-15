@extends('layout.layout')
@section('content')
<div class="container" align="center">
    <div class="row">
        <div class="col mt-4">
            <div class="card">
                <img src="{{$movie->coverUrl}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$movie->title}}</h5>
                  <p class="card-text">{{$movie->description}}</p>
                  <p>Jumlah View: {{$movie->view}}</p>
                  <p><a href="{{$movie->trailerUrl}}">Link</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
