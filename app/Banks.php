<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banks extends Model
{
    protected $table = 'banks';
	protected $fillable = [
		'title',
		'code'
	];
}
