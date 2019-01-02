<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Dashboard extends Controller
{
	/* 
	*	Index function
	*/
    public function index()
    {
    	return view('admin.dashboard', [

    	]);
    }
}
