@extends('layouts.app')

@section('content')
  <div class="container">
      <tr>
      <div class="modal-footer">
      <h1>TODO</h1>
      <a href="todo/create" type="Text" class="btn btn-primary">create</a>
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Launch demo modal
      </button>
    </tr>
      <table class="table table-bordered">
        <tr>
          <th>id</th>
          <th>Title</th>
          <th>URL</th>
          <th>Description</th>
          <th width="100">Date</th>
          <th>Status</th>
          <th width="150">Edit</th>
          <th>Show</th>
        </tr>

        @foreach($todos as $todo)
            <tr>
                <td>{{ $todo->id }}</td>
                <td>{{ $todo->title }}</td>
                <td>{{ $todo->url }}</td>
                <td>{{ $todo->description }}</td>
                <td>{{ $todo->dateadd }}</td>
                <td>
                  <form method="post" action="/todo/{{ $todo->id }}">
                    <a href="todo/{{ $todo->id }}/open" type="Text" class="btn btn-xs btn-default">Open</a>
                  </form>
                </td>
                <td>
                  <form method="post" action="/todo/{{ $todo->id }}">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    <input name="_method" type="hidden" value="DELETE">
                    <a href="todo/{{ $todo->id }}/edit" type="Text" class="btn btn-xs btn-default">Edit</a>
                    <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                </form>
                </td>
                <td>
                  <form method="post" action="/todo/{{ $todo->id }}">



                  <button type="submit" class="btn btn-xs btn-danger" id={{ $todo->id }}>Show</button>
                  </form>
                </td>
        @endforeach
      </table>
    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <tr>
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
      {{ $todos->links() }}
    </div>


@endsection
