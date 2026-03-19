<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
	protected $fillable = [
		'interest',
		'interest_1_5',
		'interest_2_5',
		'interest_3_5',
		'firstname',
		'name',
		'street',
		'location',
		'email',
		'phone',
	];

}
