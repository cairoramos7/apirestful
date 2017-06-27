<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Banks;

class BanksController extends Controller {
	protected $model;

	use \App\Http\Controllers\ApiControllerTrait;
	public function __construct(Banks $model) {
		$this->model = $model;
	}
}
