<?php

namespace app\core;

use app\core\Uri;

class Controller
{
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
		foreach (FOLDERS_CONTROLLER as $folderController) {
			if (class_exists(NAMESPACE_CONTROLLER . $folderController . '\\' . $controller)) {
				return NAMESPACE_CONTROLLER . $folderController . '\\' . $controller;
			}
		}
		return ERROR_CONTROLLER;
	}
}
