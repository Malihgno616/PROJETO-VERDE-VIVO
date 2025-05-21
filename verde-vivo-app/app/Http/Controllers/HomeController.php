<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('master'); // Essa view deve existir em resources/views/home.blade.php
    }
}
