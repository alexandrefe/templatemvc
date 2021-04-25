<?php

namespace app\controllers;

abstract class BaseController
{
  protected $twig;

  public function setTwig($twig)
  {
    $this->twig = $twig;
  }
}
