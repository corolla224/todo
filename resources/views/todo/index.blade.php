@extends('layouts.app')

@section('content')
  <div class="container">
      <h1>Todo</h1>
      <a href="todo/create" type="Text" class="btn btn-primary">New Todo</a>
      <div class="well">
      <br><button type="submit" class="btn btn-xs btn-danger">ปฏิทิน</button></br>
      <input class="datepicker" type="text" name="date">
      </div>
      <table class="table table-bordered">
        <tr>
          <th>id</th>
          <th>Title</th>
          <th>URL</th>
          <th>Description</th>
          <th>Status</th>
          <th>Edit</th>
          <th>Show</th>
        </tr>

        @foreach($todos as $todo)
            <tr>
                <td>{{ $todo->id }}</td>
                <td>{{ $todo->title }}</td>
                <td>{{ $todo->url }}</td>
                <td>{{ $todo->description }}</td>
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
      {{ $todos->links() }}
  </div>


@endsection
