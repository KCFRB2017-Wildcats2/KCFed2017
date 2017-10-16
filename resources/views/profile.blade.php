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
          <input type="file" name="avatar">
        </div>
        <button type="submit" class="btn btn-primary btn-xl">Update Profile</button>
      </form>
    </div>

    <div class="col-lg-4">
      @if(is_null($user->company))
      <h1>Company</h1>
      <form method="POST" action="{{ url('/company') }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" value="" required>
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" class="form-control" name="address" value="" required>
        </div>
        <div class="form-group">
          <label for="city">City</label><br />
          <select name="city" required>
            <option value="">Select one</option>
            @foreach($cities as $city)
            <option value="{{$city->id}}">{{$city->name}}, {{$city->state}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="domain">Email Domain</label>
          <input type="text" class="form-control" name="domain" value="{{$domain}}" required>
        </div>
        <div class="form-group">
          <label for="logo">Logo</label>
          <input type="file" name="logo">
        </div>
        <button type="submit" class="btn btn-primary btn-xl">Create Company</button>
      </form>
      @elseif($user->company_admin)
      <h1>{{$user->company->name}}</h1>
      <form method="POST" action="{{ url('/company/'.$user->company->id) }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" value="{{$user->company->name}}" required>
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" class="form-control" name="address" value="{{$user->company->address}}" required>
        </div>
        <div class="form-group">
          <label for="city">City</label><br />
          <select name="city" required>
            <option value="">Select one</option>
            @foreach($cities as $city)
            <option value="{{$city->id}}" {{$user->company->city_id == $city->id ? 'selected' : ''}}>{{$city->name}}, {{$city->state}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="domain">Email Domain</label>
          <input type="text" class="form-control" name="domain" value="{{$user->company->domain}}" required>
        </div>
        <div class="form-group">
          <label for="logo">Logo</label>
          <input type="file" name="logo">
        </div>
        <button type="submit" class="btn btn-primary btn-xl">Update Company</button>
      </form>
      @else
      <h1>{{$user->company->name}}</h1>
      @endif
    </div>
    <div class="col-lg-2">
      @if(!is_null($user->company))
      <img class="avatar" src="{{$user->company->logo}}" />
      @endif
    </div>
  </div>
</div>
@endsection
