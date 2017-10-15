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

      <h1 class="my-4">Welcome to Signing Bonus</h1>

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Find out What Events your Company Offers</h4>
            <div class="card-body">
              <p class="card-text">Events are scheduled onto cards for easy viewing, with information and links provided to look further.</p>
            </div>

          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Quickly View Company Information</h4>
            <div class="card-body">
              <p class="card-text">Companies can create profiles to provide you with easy information and links to information that you may need</p>
            </div>

          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Collaborative Events </h4>
            <div class="card-body">
              <p class="card-text">Many Companies can own a single Event, allowing the same card to go out to multiple companies if need be</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
    @endsection


