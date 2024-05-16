@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="{{$movie->coverUrl}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$movie->title}}</h5>
                  <p class="card-text">{{$movie->description}}</p>
                  <p>Jumlah View: {{$movie->view}}</p>
                  <p><a href="{{$movie->trailerUrl}}" class="btn btn-primary"><i class="fas fa-play"></i> Trailer</a></p>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

<style>
body {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    font-family: 'Arial', sans-serif;
    color: #343a40;
}

.card {
    transition: transform 0.3s, box-shadow 0.3s;
    border: none;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    position: relative;
    background: linear-gradient(135deg, #ffffff 0%, #f1f1f1 100%);
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 16px 24px rgba(0, 0, 0, 0.2);
}

.card-title {
    font-size: 1.5rem;
    color: #007bff;
    font-weight: bold;
    position: relative;
    z-index: 2;
}

.card-text {
    color: #6c757d;
    margin-bottom: 1rem;
    position: relative;
    z-index: 2;
}

.card-img-top {
    transition: transform 0.3s, filter 0.3s;
    filter: brightness(90%);
}

.card:hover .card-img-top {
    transform: scale(1.05);
    filter: brightness(100%);
}

.btn-primary {
    background-color: #e3e3e3;
    border: none;
    border-radius: 50px;
    padding: 0.5rem 1rem;
    font-weight: bold;
    transition: background-color 0.3s;
    position: relative;
    z-index: 2;
}

.btn-primary:hover {
    background-color: #ffffff;
}

.container {
    padding: 40px;
}

.col-md-4 {
    margin-bottom: 30px;
}

/* Additional Styling for Card Elements */
.card-body {
    background: #fff;
    padding: 20px;
    border-top: 1px solid #e9ecef;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    position: relative;
    z-index: 1;
}

.card-body a {
    color: #ffffff;
    text-decoration: none;
    transition: color 0.3s;
}

.card-body a:hover {
    color: #0056b3;
}

.card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(0, 123, 255, 0.1) 0%, rgba(255, 255, 255, 0) 100%);
    z-index: 0;
}

/* Media Queries for Responsive Design */
@media (max-width: 576px) {
    .card {
        width: 100%;
    }
}

</style>

<!-- Add Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
