<?php

/**
 * Retorna url atual 
 */
$site_url = new \Twig\TwigFunction('site_url', function () {
  return 'https://' . $_SERVER['SERVER_NAME'];
});
