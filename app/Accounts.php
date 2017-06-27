<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    protected $table = 'accounts';
	protected $fillable = [
		'id',
		'title',
		'agency',
		'account_number',
		'balance',
		'balance_initial',
		'bank_id',
	];

	public function bank() {
		return $this->belongsTo('App\Banks');
	}
}
