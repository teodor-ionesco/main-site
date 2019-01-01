<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Index extends Controller
{
	/*
	*** index
	*/
	public function index()
	{
		return redirect('/admin/dashboard');
	}
}
