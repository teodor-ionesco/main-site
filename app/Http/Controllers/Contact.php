<?php

namespace App\Http\Controllers;

use App\Enquiries as MEnquiries;
use App\Settings as MSettings;
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
        MEnquiries::insert([
            'name' => $request -> input('name'),
            'email' => $request -> input('email'),
            'tel' => $request -> input('tel'),
            'enquiry' => $request -> input('enquiry'),
        ]);

        /* Send an email to all contact emails regarding enquiry */
        $emails = json_decode(MSettings::select('value') -> where('name', 'contact') -> first() -> value, true); 
        $message = 'You have a new enquiry. Please access it here: <a href="http://'. $_SERVER['SERVER_NAME'] .'/admin/enquiries/'.MEnquiries::select('id') -> orderBy('id', 'desc') -> first() -> id.'"></a>';
        $headers = "From: no-reply@" . $_SERVER['SERVER_NAME'] . "\r\n";

        foreach($emails as $mail)
            mail($mail, '[WEB SOLUTIONS] Contact Enquiry', $message, $headers);

        /* Return to /contact with proper toast */
        return redirect('/contact?toast=Enquiry sent with success!');
    }
}
