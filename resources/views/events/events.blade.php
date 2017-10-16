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
        @foreach($results as $event)
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
        <li class="page-item @if ( $results->currentPage() == 1) disabled @endif">
        
            @if( $results->currentPage() == 1)
            <span class="page-link">&laquo;</span>
            @else
            <a class="page-link" href="{{ $results->previousPageUrl() }}">&laquo;</a>
            @endif
            </a>
        </li>

        @if ( $results->currentPage() > 1 )
        <li class="page-item">
            <a class="page-link" href="{{ $results->previousPageUrl() }} ">{{$results->currentPage() -1}}</a>
        </li>
        @endif

        <li class="page-item disabled active">
            <span class="page-link">{{$results->currentPage()}}</span>
        </li>
        @if ( $results->hasMorePages() )
        <li class="page-item">
            <a class="page-link" href="{{$results->nextPageUrl()}}">{{$results->currentPage() +1}}</a>
        </li>
        @endif
        @if( $results->nextPageUrl())
        <li class="page-item">
            <a class="page-link" href="{{$results->nextPageUrl()}}">&raquo;</a>
        </li>
        @else
        <li class="page-item @if (!$results->nextPageUrl()) disabled @endif">
            <span class="page-link">&raquo;</span>
        </li>
        @endif
    </ul>




</div>
<!-- /.container -->


@endsection