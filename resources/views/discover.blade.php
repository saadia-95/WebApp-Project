@extends('layouts.app')

@section('content')

<link href="{{ asset('css/discover.css') }}" rel="stylesheet">

 <div class="container">

      <div class="bg-faded p-4 my-4">
        <!-- Image Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid w-100" src="img/taylorswift2.jpg" alt="">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid w-100" src="img/ed_sheeran.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-shadow">Second Slide</h3>
                <p class="text-shadow">This is the caption for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid w-100" src="img/551e5edd906d1.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-shadow">Third Slide</h3>
                <p class="text-shadow">This is the caption for the third slide.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- Welcome Message -->
        <div class="text-center mt-4">
          <div class="text-heading text-muted text-lg"></div>
          <h1 class="my-2">Discover</h1>
          <div class="text-heading text-muted text-lg">
            <strong></strong>
          </div>
        </div>
      </div>
      <div style="display: inline-block;">
        
        <div class="bg-faded p-4 my-4" style="width: 50%; height: 50%; float: left;">
        <hr class="divider">
        <h2 class="text-center text-lg my-0">
          <strong>Blues-Rock Artists</strong>
        </h2>
        <hr class="divider">
        <div class="text-center" style="left:500px;">
          <span>
          <ul class="text-expanded" style="list-style-type: none; display: inline-block;">
            <li>Led Zeppelin</li>
            <li>Janis Joplin</li>
            <li>Jimi Hendrix</li>
            <li>Stevie Ray Vaughan</li>
            <li>Eric Clapton</li>
            <li>The Allman Brothers Band</li>
            <li>Jeff Beck</li>
            <li>Santana</li>
            <li>Bonnie Raitt</li>
            <li>Fleetwood Mac</li>  
          </ul>
        </span>      
        </div>

      </div>

      <div class="bg-faded p-4 my-4" style="width: 50%; height: 50%; float: right;">
        <hr class="divider">
        <h2 class="text-center text-lg my-0">
          <strong>Recent Releases</strong>
        </h2>
        <hr class="divider">
        <div class="text-center" style="left:500px;">
          <span>
          <ul class="text-expanded" style="list-style-type: none; display: inline-block;">
            <li>Led Zeppelin</li>
            <li>Janis Joplin</li>
            <li>Jimi Hendrix</li>
            <li>Stevie Ray Vaughan</li>
            <li>Eric Clapton</li>
            <li>The Allman Brothers Band</li>
            <li>Jeff Beck</li>
            <li>Santana</li>
            <li>Bonnie Raitt</li>
            <li>Fleetwood Mac</li>  
          </ul>
        </span>      
        </div>
      </div>

      <div class="bg-faded p-4 my-4" style="width: 50%; height: 50%; float: right;">
        <hr class="divider">
        <h2 class="text-center text-lg my-0">
          <strong>Featured Mood</strong>
        </h2>
        <hr class="divider">
        <div class="text-center" style="left:500px;">
          <span>
          <ul class="text-expanded" style="list-style-type: none; display: inline-block;">
            <li>Led Zeppelin</li>
            <li>Janis Joplin</li>
            <li>Jimi Hendrix</li>
            <li>Stevie Ray Vaughan</li>
            <li>Eric Clapton</li>
            <li>The Allman Brothers Band</li>
            <li>Jeff Beck</li>
            <li>Santana</li>
            <li>Bonnie Raitt</li>
            <li>Fleetwood Mac</li>  
          </ul>
        </span>      
        </div>
      </div>

      <div class="bg-faded p-4 my-4" style="width: 50%; height: 50%; float: right;">
        <hr class="divider">
        <h2 class="text-center text-lg my-0">
          <strong>Featured Genres</strong>
        </h2>
        <hr class="divider">
        <div class="text-center" style="left:500px;">
          <span>
          <ul class="text-expanded" style="list-style-type: none; display: inline-block;">
            <li>Led Zeppelin</li>
            <li>Janis Joplin</li>
            <li>Jimi Hendrix</li>
            <li>Stevie Ray Vaughan</li>
            <li>Eric Clapton</li>
            <li>The Allman Brothers Band</li>
            <li>Jeff Beck</li>
            <li>Santana</li>
            <li>Bonnie Raitt</li>
            <li>Fleetwood Mac</li>  
          </ul>
        </span>      
        </div>
      </div>

      </div>
      
    </div>
    <!-- /.container -->

@endsection
