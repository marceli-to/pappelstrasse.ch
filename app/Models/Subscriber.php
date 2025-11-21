<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
	protected $fillable = [
		'interest',
		'firstname',
		'name',
		'street',
		'location',
		'email',
		'phone',
	];

}
