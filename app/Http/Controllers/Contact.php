<?php

namespace App\Http\Controllers;

use App\Enquiries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Contact extends Controller
{
	/* Private properties */
	private $toast = null;

    /* Show index page */
    public function index()
    {
    	return view('contact', [
    		'TOAST' => $this -> toast,
    	]);
    }

    /* Create a new contact enquiry */
    public function create(Request $request)
    {
        /* Make sure there is provided at least a phone number or an email address */
        if(empty($request -> input('email')) && empty($request -> input('tel')))
            return redirect('/contact?toast=Please provide either an email address or a telephone number.') -> withInput($request -> input());

        /* Create validator instance */
        $validator = Validator::make($request -> input(), [
            'name' => 'required|max:100',
            'email' => 'nullable|email|max:100',
            'tel' => 'nullable',
            'enquiry' => 'min:10|max:1000',
        ]);

        /* Validate the requests */
        if($validator -> fails())
            return redirect() -> back() -> withErrors($validator) -> withInput($request -> input());

        /* Insert the data into database */
        Enquiries::insert([
            'name' => $request -> input('name'),
            'email' => $request -> input('email'),
            'tel' => $request -> input('tel'),
            'enquiry' => $request -> input('enquiry'),
        ]);

        /* Return to /contact with proper toast */
    	return redirect('/contact?toast=Enquiry sent with success!');
    }
}
