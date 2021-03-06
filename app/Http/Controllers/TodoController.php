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
              'description'=>$request->description,
              'dateadd'=>$request->dateadd

    ]);

      return redirect('todo');
    }

    public function edit($id)
    {
        $todo = Todo::find($id);

        return view('todo.edit', compact('todo'));
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);

        $todo->update( $request->all() );

      return redirect('todo');
    }

    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        return redirect('todo');
    }

    public function show()
    {
        $todo = Todo::find($id);

        return view('todo.show');
    }

}
