<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function show($name)
    {
        return view('greeting', ['name' => $name]);
    }
}