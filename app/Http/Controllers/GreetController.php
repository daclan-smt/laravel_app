<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{
    // Show the greeting page
    public function index()
    {
        return view('greet');
    }

    // Redirect to tasks
    public function proceed()
    {
        return redirect()->route('tasks.index');
    }
}
