@extends('layouts.app')

@section('content')
  <div class="container">
      <h1>Rodo</h1>
      <a href="todo/create" type="Text" class="btn btn-primary">New Rodo</a>
      <table class="table table-bordered">
        <tr>
          <th>id</th>
          <th>Title</th>
          <th>URL</th>
          <th>Description</th>
          <th>Status</th>
          <th>Button</th>
          <th>Edit</th>
          <th>Actions</th>
        </tr>

        @foreach($todos as $rodo)
            <tr>
                <td>{{ rodo->id }}</td>
                <td>{{ rodo->title }}</td>
                <td>{{ rodo->url }}</td>
                <td>{{ rodo->description }}</td>
                <td>{{ $rodo->Status}}</td>
                <td>{{ $rodo->Button}}</td>
                <td>{{ $rodo->Edit}}</td>
                <td>
                  <form method="post" action="/rodo/{{ $rodo->id }}">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    <input name="_method" type="hidden" value="DELETE">
                    <a href="rodo/{{ $rodo->id }}/edit" type="Text" class="btn btn-xs btn-default">Edit</a>
                    <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                  </form>
                </td>
              </tr>
        @endforeach
      </table>
      {{ $todos->links() }}
  </div>


@endsection
