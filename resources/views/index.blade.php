@extends('layouts.main')
@section('title', 'Home')

@section('content')
    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" background-image= "https://s3.amazonaws.com/kcfed-wildcats-2/logo.png">
            <div class="carousel-caption d-none d-md-block">
              <h3>Signing Bonus</h3>
              <p>Here to help you know whats going on with your new Company</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" background-image = "https://s3.amazonaws.com/kcfed-wildcats-2/logo.png">
            <div class="carousel-caption d-none d-md-block">
              <h3>Created for the KCFed 2017 Code-A-Thon</h3>
              <p>Using PHP with Laravel</p>
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
    </header>

    <!-- Page Content -->
    <div class="container">
      <img src="{{URL::asset('/images/logoCropped.png')}}" alt="Logo" height="303" width="1224">
      <h1 class="my-4">Welcome to Signing Bonus</h1>
      <hr class="hr-panel">

      <!-- Marketing Icons Section -->
      <div class="row welcome-padding">
        <div class="col-lg-8 col-lg-offset-2 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Find out What Events your Company Offers</h4>
            <div class="card-body">
              <p class="welcome-text card-text">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
              </p>
            </div>
          </div>
        </div>
      </div>

      <h1 class="my-4">Cities</h1>
      <hr class="hr-panel">


        <div class="row">
          <div class="col-lg-4 mb-4">
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">Kansas City</h3>
              </div>
              <div class="panel-body panel-padding">
                <img class="panel-image" src="{{URL::asset('/images/kansascity.png')}}" alt="Kansas City">
                <p class="panel-body panel-text"> 
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
              </div>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-4 mb-4">
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">Seattle</h3>
              </div>
              <div class="panel-body panel-padding">
                <img class="panel-image" src="{{URL::asset('/images/seattle.png')}}" alt="Seattle">
                <p class="panel-body panel-text"> 
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
              </div>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-4 mb-4">
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">San Fransisco</h3>
              </div>
              <div class="panel-body panel-padding">
                <img class="panel-image" src="{{URL::asset('/images/sanfransisco.png')}}" alt="San Fransisco">
                <p class="panel-body panel-text"> 
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
    <!-- /.container -->
    @endsection


