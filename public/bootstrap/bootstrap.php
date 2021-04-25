<?php

use app\core\Parameters;
use app\core\Template;

$template = new Template;
$twig = $template->init();

/**
 * Função que retorna a url atual
 * utilizada nos href e src do html
 */
$twig->addFunction($site_url);

/**
 * Chamando o controller digitado na url
 */
$callController = new app\core\Controller;
$calledController = $callController->controller();
$controller = new $calledController();

/**
 * Atribuindo o twig aos controllers
 */
$controller->setTwig($twig);

/**
 * Chamando o método digitado na url
 */
$callMethod = new app\core\Method;
$method = $callMethod->method($controller);

$parameters = new Parameters;
$parameter = $parameters->getParameterMethod($controller, $method);

/**
 * Chamando o controller através da classe controller e da classe method
 */
$controller->$method();
