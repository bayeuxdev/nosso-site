<?php

/**
 * 
 * MAIN PROCEDURAL ROUTER
 * STATUS: WORKING
 * TYPE: CONTROLLER
 * VERSION: 0.0.0 
 * UP_TO_DATE: 26/07/24
 * 
 **/



$request = substr(explode('?', $_SERVER['REQUEST_URI'])[0], 1);

switch ($request) {
  case '':
    $view = 'home';
    break;
  case 'about':
  case 'sobre':
    $view = 'about';
    break;

  case 'carreras':
  case 'carreiras':
  case 'careers':
    $view = 'careers';
    break;

  case 'contato':
  case 'contacto':
  case 'contact':
  case 'quote':
    $view = 'quote';
    break;

  case 'tech':
  case 'tecnologia':
  case 'tecnologias':
    $view = 'tech';
    break;

  case 'projects':
  case 'projetos':
  case 'projectos':
    $view = 'projects';
    break;

  case 'marketing':
  case 'mkt':
    $view = 'mkt';
    break;

  case 'systems':
    $view = 'systems';
    break;

  case 'integracoes':
  case 'integraciones':
  case 'integrations':
    $view = 'integrations';
    break;
  case 'front':
    $view = 'front';
    break;
  case 'portfolio/viewer':
    $view = 'portfolio-viewer';
    break;
  default:
    exit(404);
    break;
}

include "common/header.php";


require "dev/$view.php";
if ($view !== "portfolio-viewer") {
  include "common/footer.php";
}
