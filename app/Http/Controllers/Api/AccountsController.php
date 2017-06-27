<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Accounts;

class AccountsController extends Controller
{
	protected $model;
	protected $relationShip = ['bank'];

	use \App\Http\Controllers\ApiControllerTrait;
	public function __construct(Accounts $model) {
		$this->model = $model;
	}
}
