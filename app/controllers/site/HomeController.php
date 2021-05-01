<?php

namespace app\controllers\site;

use app\controllers\BaseController;

class HomeController extends BaseController
{

  public function index()
  {

    $dataForTemplate = [
      'title' => "Template MVC"
    ];

    $template = $this->twig->load('home.site.twig');
    $template->display($dataForTemplate);
  }
}
