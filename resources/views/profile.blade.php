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
          <input type="file" class="form-control" name="avatar">
        </div>
        <button type="submit" class="btn btn-primary btn-xl">Update Profile</button>
      </form>
    </div>
    <div class="col-lg-4">
      @if(is_null($user->company))
      <h1>Company</h1>
      <form method="POST" action="{{ url('/company') }}" enctype="multipart/form-data">
      @else
      <h1>{{$user->company->name}}</h1>
      <form method="PUT" action="{{ url('/company') }}" enctype="multipart/form-data">
      @endif
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" value="{{is_null($user->company) ? '' : '$user->company->name'}}" required>
        </div>
        <div class="form-group">
          <label for="address_line_1">Address</label>
          <input type="text" class="form-control" name="address_line_1" value="{{is_null($user->company) ? '' : '$user->company->address_line_1'}}" required>
        </div>
        <div class="form-group">
          <label for="address_line_2">Address 2</label>
          <input type="text" class="form-control" name="address_line_2" value="{{is_null($user->company) ? '' : '$user->company->address_line_2'}}">
        </div>
        <div class="form-group">
          <label for="address_line_2">City</label>
          <select name="city" required>
            <option value="">Select one</option>
            @foreach($cities as $city)
            <option value="{{$city->id}}" {{(!is_null($user->company) && $user->company->city_id == $city->id) ? 'selected' : ''}}>{{$city->name}}, {{$city->state}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="zip">Zip Code</label>
          <input type="text" class="form-control" name="zip" value="{{is_null($user->company) ? '' : '$user->company->zip'}}" required>
        </div>
        <div class="form-group">
          <label for="website_url">Website</label>
          <input type="text" class="form-control" name="website_url" value="{{is_null($user->company) ? '' : '$user->company->website_url'}}">
        </div>
        <div class="form-group">
          <label for="domain">Email Domain</label>
          <input type="text" class="form-control" name="domain" value="{{is_null($user->company) ? $domain : '$user->company->domain'}}" required>
        </div>
        <div class="form-group">
          <label for="description">Company Description</label>
          <input type="text" class="form-control" name="description" value="{{is_null($user->company) ? '' : '$user->company->description'}}">
        </div>
        <div class="form-group">
          <label for="avatar">Logo</label>
          <input type="file" class="form-control" name="avatar">
        </div>
        @if(is_null($user->company))
        <button type="submit" class="btn btn-primary btn-xl">Create Company</button>
        @else
        <button type="submit" class="btn btn-primary btn-xl">Update Company</button>
        @endif
      </form>
    </div>
  </div>
</div>
@endsection
