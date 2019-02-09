<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Settings as MSettings;

class Contact extends Controller
{
	/* 
	*	Bridge property 
	*/
	private $Bridge = [
		'MESSAGE' => null,
	];

	/*
	*	Index method
	*/
	public function index()
	{
		return view('admin.contact', [
			'CONTACT' => json_decode(MSettings::where('name', 'contact') -> first() -> value, true),
			'MESSAGE' => $this -> Bridge['MESSAGE'],
		]);
	}

	/*
	*	Update method
	*/
	public function update(Request $request)
	{
		/* Create validator */
		$validator = Validator::make($request -> all(), [
			'email.*'	=> 'required|email',
		]);

		/* Check data */
		if($validator -> fails())
		{
			$this -> Bridge['MESSAGE'] = 'Please input valid emails.';
			return $this -> index();
		}

		/* Remap array */
		if($request -> input('email') === null)
			$array = [];
		else
			$array = array_values($request -> input('email'));

		/* Update data */
		MSettings::where('name', 'contact') -> update([
			'value' => json_encode($array),
		]);

		/* Returen index with message */
		$this -> Bridge['MESSAGE'] = 'Contact emails updated with success!';
		return $this -> index();
	}
}
