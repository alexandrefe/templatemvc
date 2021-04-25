<?php

namespace app\core;

use app\core\Uri;

class Controller
{

	const NAMESPACE_CONTROLLER = '\\app\\controllers\\';
	const FOLDERS_CONTROLLER = ['site', 'admin'];
	const ERROR_CONTROLLER = '\\app\\controllers\\error\\ErrorController';

	private $uri;

	public function __construct()
	{
		$this->uri = new Uri;
	}

	private function getController()
	{
		if ($this->uri->getUri() != '/') {
			$explodeUri = array_filter(explode('/', $this->uri->getUri()));
			return ucfirst($explodeUri[1]) . 'Controller';
		}
		return ucfirst(DEFAULT_CONTROLLER) . 'Controller';
	}

	public function controller()
	{
		$controller = $this->getController();
		foreach (self::FOLDERS_CONTROLLER as $folderController) {
			if (class_exists(self::NAMESPACE_CONTROLLER . $folderController . '\\' . $controller)) {
				return self::NAMESPACE_CONTROLLER . $folderController . '\\' . $controller;
			}
		}
		return self::ERROR_CONTROLLER;
	}
}
