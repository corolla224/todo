@extends('layouts.app')

@section('content')
  <div class="container">
      <h1>My Create</h1>
      <form method="post" action="/todo">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="Title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="URL">URl</label>
            <input type="text" class="form-control" name="url" id="url" placeholder="http://www.example.com">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="description">
        </div>
        <div class="form-group">
            <label for="dateadd">Date</label>
            <input  type="text" class="form-control" name="dateadd" id="datepicker"placeholder="dateadd">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

@endsection
