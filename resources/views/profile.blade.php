@extends('layouts.main')
@section('title', 'Profile')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-2">
      <img class="avatar" src="{{$user->avatar}}" />
    </div>
    <div class="col-lg-4">
      <h1>{{$user->first_name}} {{$user->last_name}}</h1>
      @if(!is_null($user->company))
      <p>{{$user->company->name}}</p>
      @endif
      <form method="POST" action="{{ url('/profile') }}" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" name="first_name" value="{{ $user->first_name }}" required>
          </div>
          <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" name="last_name" value="{{ $user->last_name }}" required>
          </div>
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
          </div>
          <div class="form-group">
            <label for="avatar">Profile Picture</label>
            <input type="file" class="form-control" name="avatar">
          </div>
          <button type="submit" class="btn btn-primary btn-xl">Update Profile</button>
        </form>
    </div>

  </div>
</div>
@endsection
