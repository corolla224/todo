<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rodo;

class RodoController extends Controller
{
    pubilc function index()
    {
      return view('rodo.index', compact('rodos') );
    }
}
