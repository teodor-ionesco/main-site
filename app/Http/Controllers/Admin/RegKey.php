<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Settings as MSettings;

class RegKey extends Controller
{
	/* Private properties */
	private $toast = null;

    /* Shows RegKey setup page */
    public function index()
    {
    	return view('admin.regkey', [
    		'REGKEY' => MSettings::select('value') -> where('name', 'regkey') -> first() -> value,
    		'TOAST' => $this -> toast,
    	]);
    }

    /* Update regkey */
    public function update(Request $request)
    {
    	MSettings::where('name', 'regkey') -> update([
    		'value' => $request -> input('regkey'),
    	]);

    	$this -> toast = 'Registration key updated with success.';
    	return $this -> index();
    }
}
