<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;


class TodoController extends Controller
{
    public function index()
    {
       $todos = Todo::paginate(10);

       return view('todo.index', compact('todos') );
    }


    public function create()
    {
      return view('todo.create');
    }

    public function store(Request $request)
    {

      Todo::create([
              'title'=>$request->title,
              'url'=>$request->url,
              'description'=>$request->description
      ]);

      return redirect('todo');
    }

    public function edit($id)
   {
     $todo = Todo::find($id);

     return view('todo.edit', compact('todo'));
   }
}
