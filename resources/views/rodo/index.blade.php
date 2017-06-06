@extends('layouts.app')

@section('content')
<div class="container">
<h1>Rodo</h1>
<a href="rodo/create" type="Text" class="btn-sm btn-success">New Rodo</a>
<table class="table table-bordered">
        <tr>
          <th>id</th>
          <th>Title</th>
          <th>URL</th>
          <th>Description</th>
          <th>Status</th>
          <th>button</th>
          <th>Edit</th>
        </tr>
        @foreach($todos as $todo)
            <tr>
                <td>{{ $todo->id }}</td>
                <td>{{ $todo->title }}</td>
                <td>{{ $todo->url }}</td>
                <td>{{ $todo->description }}</td>
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
</div>
</table>

@endsection
