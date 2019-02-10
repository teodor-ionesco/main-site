<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
    /* Shows about page */
    public function index()
    {
    	return view('about', []);
    }
}
