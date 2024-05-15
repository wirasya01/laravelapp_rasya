@extends('layout.layout')
@section('content')
<style>
    body {
        background: linear-gradient(to bottom, rgb(0, 0, 0), rgb(138, 138, 138), rgb(255, 255, 255));
        font-family: 'Roboto', sans-serif;
        color: #333;
        margin: 0;
        padding: 0;
    }

    .container {
        padding: 20px;
        max-width: 1200px;
        margin: auto;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .col {
        flex: 0 0 470px;
        margin: 15px;
    }

    .card {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 16px 32px rgba(0, 0, 0, 0.2);
    }

    .card-img-top {
        border-bottom: 1px solid #ddd;
        object-fit: cover;
        height: 300px;
        width: 100%;
    }

    .card-body {
        padding: 20px;
        text-align: center;
    }

    .card-title {
        font-size: 1.5em;
        margin-bottom: 15px;
        color: #ffffff;
        font-weight: bold;
    }

    .card-text {
        font-size: 1em;
        color: #666;
    }

    .card a {
        color: #007bff;
        text-decoration: none;
        transition: color 0.3s;
    }

    .card a:hover {
        color: #0056b3;
    }

    .card-header {
        background-color: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 20px;
        border-bottom: 1px solid #444;
    }

    .btn {
        margin: 5px;
        padding: 10px 20px;
        border-radius: 25px;
        border: none;
        background-color: #181818;
        color: white;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn:hover {
        background-color: #000000;
    }

    .text-center {
        text-align: center;
    }

    .mt-5 {
        margin-top: 3rem !important;
    }

    .mb-5 {
        margin-bottom: 3rem !important;
    }
</style>
<div class="container">
    <div class="row">
        @foreach ($artikel as $artikels)
        <div class="col mt-5">
            <div class="card">
                <img src="{{$artikels->foto}}" class="card-img-top" alt="..." height='450px' width="300px">
                <div class="card-body" style="height: 450px; margin-bottom:10px;">
                  <h5 class="card-title">{{$artikels->judul}}</h5>
                  <p class="card-text">{{$artikels->kategori}}</p>
                  <p>Jumlah View: {{$artikels->konten}}</p>
                  <p>Penulis: {{$artikels->penulis}}</p>
                  <p><a href="/artikel/id/{{$artikels->id}}">Link</a></p>
                </div>
              </div>
        </div>
        @endforeach
    </div>
    <center>
        <div class="card text-center mt-5">
            <div class="card-header">
                <h5 class="card-title">Kategori</h5>
            </div>
            <div class="card-body">
              <a href="/artikel/kategori/kesehatan" class="btn btn-dark">Kesehatan</a>
              <a href="/artikel/kategori/bisnis" class="btn btn-dark">Bisnis</a>
              <a href="/artikel/kategori/kuliner" class="btn btn-dark">Kuliner</a>
            </div>
          </div>
    </center>
</div>
@endsection
