@extends('layouts.main')
@section('title', 'Profile')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <h1>Create Event</h1>
      <form method="POST" action="{{ url('/events/create') }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label for="name">Event Name</label>
          <input type="text" class="form-control" name="name" value="" required>
        </div>
        <div class="form-group">
          <label for="private">Private</label>
          <input type="checkbox" name="private">
        </div>
        <div class="form-group">
          <label for="start_date">Start Date</label>
          <input type="text" class="form-control" name="start_date" id="start_date" value="" required>
        </div>
        <div class="form-group">
          <label for="end_date">End Date</label>
          <input type="text" class="form-control" name="end_date" id='end_date' value="" required>
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control" name="description" value="" required>
        </div>
        <div class="form-group">
          <label for="image">Event Image</label>
          <input type="file" name="image">
        </div>
        <button type="submit" class="btn btn-primary btn-xl">Create Event</button>
      </form>
    </div>
  </div>
</div>
@endsection

@section('footer')
<script>
$(function () {
  $('#start_date').datetimepicker();
  $('#end_date').datetimepicker();
});
</script>
@endsection
