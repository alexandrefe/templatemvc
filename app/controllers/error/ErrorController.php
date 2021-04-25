<?php

namespace app\controllers\error;

use app\controllers\BaseController;

class ErrorController extends BaseController {
	public function index() {
		dd('Error');
	}

	public function error503() {
		dd(503);
	}
}