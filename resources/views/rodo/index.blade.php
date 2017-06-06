@extends('layouts.app')

@section('content')
<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
<div class="container">
<h1>Rodo</h1>
<a href="rodo/create" type="Text" class="btn-sm btn-success">New Rodo</a>
<table class="table table-bordered ">

        <tr style="border-bottom:1pt solid black;">
          <th>ID</th>
          <th>Title</th>
          <th>URL</th>
          <th>Description</th>
          <th>Status</th>
          <th>button</th>
          <th>Edit</th>
        </tr>

        <tr>
          <td>id</td>
          <td>Title</td>
          <td>URL</td>
          <td>Description</td>
          <td><button type="submit" class="btn btn-xs btn-Success">Online</button></td>
          <td><button type="submit" class="btn btn-xs btn-warning">Open</button></td>
          <td><button type="submit" class="btn btn-xs btn-info">edit</button>
          <button type="submit" class="btn btn-xs btn-danger">delete</button>
          </td>
        </tr>



</table>

@endsection
