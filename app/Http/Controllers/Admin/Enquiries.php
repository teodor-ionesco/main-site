<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Enquiries as MEnquiries;


class Enquiries extends Controller
{
    /* Show enquiries page */
    public function index()
    {
    	return view('admin.enquiries', [
    		'ENQUIRIES' => MEnquiries::all(),
    	]);
    }

    /* Show specific enquiry */
    public function read($id)
    {
    	return view('admin.enquiry', [
    		'ENQUIRY' => MEnquiries::select('*') -> where('id', $id) -> first(),
    	]);
    }
}
