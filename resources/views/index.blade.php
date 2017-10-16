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
            <h4 class="card-header">About the project</h4>
            <div class="card-body">
              <p class="welcome-text card-text">
              Signing Bonus is a web application built by Alex Todd, Kyle Eisenbarger, Tristan Mansfield, and Tyler Aden; Computer Science and Computer Information Systems students at Kansas State University.

Many companies have team building events or "fun committees" and these are some of the best ways to get involved in a company and meet fellow co-workers. The goal of Signing Bonus is to help students and new employees transition into the corporate world after graduation. We do this by providing a place for companies to post their upcoming events and other ways that employees can get involved.

Company managers can sign in to Signing Bonus, setup their company profile, and post upcoming events. Managers have the option to make events private to the company or public if they want to have attendees from around the local area.

When students sign in to Signing Bonus, we'll automatically connect them to the company and give them the list of upcoming events they can attend.
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
                Kansas City is the largest city in Missouri, United States. According to the U.S. Census Bureau, the city had an estimated population of 481,420 in 2016, making it the 37th largest city by population in the United States.              
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
                Seattle is a seaport city on the west coast of the United States. It is the seat of King County, Washington. With an estimated 704,352 residents as of 2016, Seattle is the largest city in both the state of Washington and the Pacific Northwest region of North America                </p>
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
                San Francisco is the cultural, commercial, and financial center of Northern California. The consolidated city-county covers an area of about 47.9 square miles at the north end of the San Francisco Peninsula in the San Francisco Bay Area. The 2016 census-estimated population is 870,887.                </p>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
    <!-- /.container -->
    @endsection


