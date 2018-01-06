@extends('layouts.app')

@section('content')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">

<div class="container">

      <div class="bg-faded p-4 my-4">
        <!-- Search Box -->
        <div class="bg-faded p-4 my-4">
        <div class="card card-inverse">
          <img class="card-img img-fluid w-100" src="img/Gary-Clark-Jr.-photo-courtesy-of-the-artist.jpg" alt="">
          <div class="card-img-overlay bg-overlay">
            <div class="wrap">
              <div class="search">
                <h4 class="text-shadow text-white">"When all words fail, music speak."</h4>
                <input type="text" class="searchTerm" placeholder="Search">
                <a href="{{ url('/song') }}">
                  <button type="submit" class="searchButton">
                    <i class="fa fa-search">Go!</i>
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>
        </div>
        <!-- Welcome Message -->
        <div class="text-center mt-4">
          <div class="text-heading text-muted text-lg">Welcome To</div>
          <h1 class="my-2">La Musique</h1>
          <div class="text-heading text-muted text-lg">
            <strong></strong>
          </div>
        </div>
      </div>

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">
          <strong>Recent</strong>
        </h2>
        <hr class="divider">

        <div class="main_block text-center" style="margin-top: 50px;">

          <div class = "inner_block">
            <img src="img/sheeran.jpg" width="150" alt="image1" />
            <p>
              <strong>Ed Sheeran, 'Divide'<br></strong>
              Sheeran’s most risk-taking effort, Divide includes Irish sounds and African vibes -- the singer-songwriter even tries his hand at Spanish -- resulting in quite the impressive collection. Sheeran,...
              <a href="#" class="btn btn-secondary">Read More</a>
            </p>
          </div>
          <div class = "inner_block">
            <img src="img/OnlyHuman.jpg" width="150" alt="image2" />
            <p>
              <strong>Rag'n'Bone Man, 'Human'<br></strong>
              I always know a song is great when my dad texts me about it, as was the case with lead single “Human” off Rag'n'Bone Man’s debut album of the same name. The rich rasp of the English ..
              <a href="#" class="btn btn-secondary">Read More</a>
            </p>
          </div>
        </div>

      </div>




      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">
          <strong>Sitemap</strong>
        </h2>
        <hr class="divider">
        <div class="text-center" style="left:500px;">
          <span>
          <ul class="text-expanded" style="list-style-type: none; display: inline-block;">
            <li>Company</li>
            <li>About</li>
            <li>Jobs</li>
            <li>Press</li>
          </ul>

          <ul class="text-expanded" style="list-style-type: none; display: inline-block;">
            <li>Communities</li>
            <li>For Artists</li>
            <li>Developers</li>
            <li>Brands</li>
          </ul>

          <ul class="text-expanded" style="list-style-type: none; display: inline-block;">
            <li>Useful Links</li>
            <li>Help</li>
            <li>Gifts</li>
            <li>Web Player</li>
          </ul>
        <span>
        </div>

      </div>
    </div>
    <!-- /.container -->

@endsection
