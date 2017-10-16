@extends('layouts.main')
@section('title', 'Profile')

@section('content')

<!-- Page Content -->
<div class="container">


    <!-- Page Heading -->
    <h1 class="my-4">Upcoming Events
    </h1>
    @if(Auth::User()->company_admin)
    <button type="button" class="btn btn-primary">Create an Event</button>
    @endif

    <hr class="hr-panel">

    <div class="row">
        @foreach($events as $event)
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"> {{$event->name}} </h3>
                </div>
                <div class="panel-body">
                <p class="panel-body"> {{ $event->description }} </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- /.row -->

    <!-- Pagination -->
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>


</div>
<!-- /.container -->


@endsection