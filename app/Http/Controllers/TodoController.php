<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class TodoController extends Controller
{
    public function index()
    {
       $todos = \App\Todo::all();


       //var_dump($todos);
       //exit;

       dd($todos);

       return 'Hello My Todo';
    }
}
