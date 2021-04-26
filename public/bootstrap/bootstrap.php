<?php

use app\core\Parameters;
use app\core\Template;

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->allowQuit(false);
$whoops->writeToOutput(false);

try {

    $template = new Template;
    $twig = $template->init();

    $twig->addFunction($site_url);

    $callController = new app\core\Controller;
    $calledController = $callController->controller();
    $controller = new $calledController();

    $controller->setTwig($twig);

    $callMethod = new app\core\Method;
    $method = $callMethod->method($controller);

    $parameters = new Parameters;
    $parameter = $parameters->getParameterMethod($controller, $method);

    $controller->$method();

} catch (Throwable $e) {
    $html = $whoops->handleException($e);
    echo $html;
}