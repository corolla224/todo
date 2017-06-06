<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rodo;


class RodoController extends Controller
{
     public function index()
    {
      $rodo = \App\Rodo::all();

      return view('rodo.index');
    }
}
