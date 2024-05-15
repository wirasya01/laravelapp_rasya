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

@import url("https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600");

:root {
  --bar-scale-y: 0;
  --sparkle-color: rgb(253 244 215 / 40%);
}

@keyframes pop-word {
  to {
    transform: rotateX(0);
  }
}

@keyframes show {
  to {
    opacity: 1;
  }
}

@keyframes bar-scale {
  to {
    transform: scaleY(1);
  }
}

@keyframes sparkle {
  0% {
    transform: scale(0);
  }

  60% {
    transform: scale(1) translate(4px, 1px) rotate(8deg);
  }

  100% {
    transform: scale(0) translate(4px, 1px) rotate(8deg);
  }
}

@keyframes shimmer {
  to {
    text-shadow: 0 0 8px red;
  }
}



h1 {
  color: white;
  font-family: "Playfair Display", Vidaloka, serif;
  font-size: 8rem;

  line-height: 0.85;
  perspective: 500px;
}

.word {
  display: block;

  animation: show 0.01s forwards, pop-word 1.5s forwards;
  animation-timing-function: cubic-bezier(0.14, 1.23, 0.33, 1.16);
  opacity: 0;

  transform: rotateX(120deg);
  transform-origin: 50% 100%;
}

.word:nth-of-type(2) {
  padding: 0 2rem;

  animation-delay: 1.5s;

  color: gold;
}

.superscript {
  position: relative;
  animation-delay: 3.6s;

  animation-duration: 0.25s;
  animation-name: shimmer;

  vertical-align: text-top;
}

/* bars */
.superscript::before {
  --bar-width: 25%;

  position: absolute;

  top: 37%;
  left: 47%;
  width: 14%;
  height: 48%;

  animation: bar-scale 0.25s linear 3s 1 forwards;

  background: linear-gradient(
    to right,
    white var(--bar-width),
    transparent var(--bar-width) calc(100% - var(--bar-width)),
    white calc(100% - var(--bar-width))
  );

  content: "";

  transform: scaleY(var(--bar-scale-y));
}

/* sparkle */
.superscript::after {
  --size: 10rem;

  position: absolute;

  top: -5%;
  left: -85%;

  width: var(--size);
  height: var(--size);

  animation: sparkle 0.4s linear 3.5s 1 forwards;

  background: radial-gradient(
      circle at center,
      rgb(252 249 241 / 94%) 0% 7%,
      transparent 7% 100%
    ),
    conic-gradient(
      transparent 0deg 18deg,
      var(--sparkle-color) 18deg,
      transparent 20deg 40deg,
      var(--sparkle-color) 40deg,
      transparent 43deg 87deg,
      var(--sparkle-color) 87deg,
      transparent 95deg 175deg,
      var(--sparkle-color) 175deg,
      transparent 178deg 220deg,
      var(--sparkle-color) 220deg,
      transparent 222deg 270deg,
      var(--sparkle-color) 270deg,
      transparent 275deg 300deg,
      var(--sparkle-color) 300deg,
      transparent 303deg 360deg
    );

  border-radius: 50%;
  clip-path: polygon(
    50% 0,
    59.13% 26.64%,
    85.13% -2.35%,
    100% 50%,
    50% 100%,
    0 50%,
    31.39% 34.86%
  );

  content: "";

  filter: blur(1px);

  transform: scale(0);
}

@media screen and (max-width: 600px) {
  h1 {
    font-size: 5rem;
  }

  /* sparkle */
  .superscript::after {
    --size: 6rem;
  }
}

</style>
<div class="container">
    <center>
    <h1>
        <span class="word">Artikel<span class="superscript"></span> </span>
        <span class="word"></span>
      </h1>
    </center>
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
