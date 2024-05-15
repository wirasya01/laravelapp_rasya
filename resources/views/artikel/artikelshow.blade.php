@extends('layout.layout')
@section('content')
<style>
    body {
        background: linear-gradient(to bottom, rgb(34, 34, 34), rgb(138, 138, 138), rgb(255, 255, 255));
        font-family: 'Arial', sans-serif;
        color: #333;
        margin: 0;
        padding: 0;
    }

    .container {
        padding: 20px;
    }

    .row {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .col {
        flex: 0 0 300px;
        margin: 15px;
    }

    .card {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }

    .card-img-top {
        border-bottom: 1px solid #ddd;
        object-fit: cover;
        height: auto;
        width: 100%;
    }

    .card-body {
        padding: 20px;
        text-align: center;
    }

    .card-title {
        font-size: 1.25em;
        margin-bottom: 15px;
        color: #333;
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
        background-color: rgb(23, 23, 23);
        color: white;
        padding: 10px 20px;
        border-bottom: 1px solid #444;
    }

    .btn {
        margin: 5px;
        padding: 10px 20px;
        border-radius: 4px;
        border: none;
        background-color: #333;
        color: white;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn:hover {
        background-color: #555;
    }

    .text-center {
        text-align: center;
    }

    .mt-5 {
        margin-top: 3rem !important;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col mt-5">
            <div class="card" style="width: 22rem;">
                <img src="{{$artikel->foto}}" class="card-img-top" alt="Article Image">
                <div class="card-body">
                    <h5 class="card-title">{{$artikel->judul}}</h5>
                    <p class="card-text">{{$artikel->kategori}}</p>
                    <p>Jumlah View: {{$artikel->konten}}</p>
                    <p>Penulis: {{$artikel->penulis}}</p>
                    <p><a href="">Link</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
