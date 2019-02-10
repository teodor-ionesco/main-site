<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
	/* Set target table */
    protected $table = 'settings';
	
	/* No timestamps */
	public $timestamps = false;
}
