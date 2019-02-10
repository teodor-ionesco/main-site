<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Privacy extends Controller
{
    /* Index method. Shows privacy policy page */
    public function index()
    {
    	return view ('privacy', [

    	]);
    }
}
