@extends('layouts.app')

@section('content')
  <div class="container">
      <h1>Todo</h1>
      <a href="todo/create" type="Text" class="btn btn-primary">New Todo</a>
      <table class="table table-bordered">
        <tr>
          <th>id</th>
          <th>Title</th>
          <th>URL</th>
          <th>Description</th>
          <th>Actions</th>
        </tr>

        @foreach($todos as $todo)
            <tr>
                <td>{{ $todo->id }}</td>
                <td>{{ $todo->title }}</td>
                <td>{{ $todo->url }}</td>
                <td>{{ $todo->description }}</td>
                <td>
                  <form method="post" action="/todo/{{ $todo->id }}">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    <input name="_method" type="hidden" value="DELETE">
                    <a href="todo/{{ $todo->id }}/edit" type="Text" class="btn btn-xs btn-default">Edit</a>
                    <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                  </form>
                </td>
              </tr>
        @endforeach
      </table>
      {{ $todos->links() }}
  </div>


@endsection
