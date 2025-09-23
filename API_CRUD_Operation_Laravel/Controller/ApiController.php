<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{

      public function index()
    {
        return view('index');
    }
    public function store(Request $request)
    {
      
        return view('index', ['data' => $request->all()]);
        
    }

}