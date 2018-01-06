@extends('layouts.app')

@section('content')

  <link href="{{ asset('css/about.css') }}" rel="stylesheet">

    <div class="container">

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">About
          <strong>La Musique</strong>
        </h2>
        <hr class="divider">
        <div class="row">
          <div class="col-lg-6">
            <img class="img-fluid mb-4 mb-lg-0" src="{{url('img/music.jpg')}}" alt="">
          </div>
          <div class="col-lg-6">
            <p>La Musique is an online audio distribution platform based in Karachi, Pakistan, that enables its users to download and stream their favorite music.</p>
            <p>La Musique is an online audio distribution platform based in Karachi, Pakistan, that enables its users to download and stream their favorite music.</p>
          </div>
        </div>
      </div>

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Our
          <strong>Team</strong>
        </h2>
        <hr class="divider">
        <div class="row">
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="{{url('img/JN.jpg')}}" alt="">
              <div class="card-body text-cent+er">
                <h4 class="card-title m-0">Jaweria Khan
                </h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="{{url('img/KK.jpg')}}" alt="">
              <div class="card-body text-center">
                <h4 class="card-title m-0">Kehkashan Salman
                </h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="{{url('img/SR.jpg')}}" alt="">
              <div class="card-body text-center">
                <h4 class="card-title m-0">Saadia Rasheed
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- /.container -->
@endsection
