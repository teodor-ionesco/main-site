<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Index extends Controller
{
	/*
	*	Return index view
	*/
    public function index()
    {
    	return view('index', [

    	]);
    }
}
