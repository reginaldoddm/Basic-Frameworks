<?php

use controllers\indexController;

define('DS', DIRECTORY_SEPARATOR);
define('SITE_PATH', realpath(dirname(__FILE__)) . DS);


//Require Autoload
require_once 'application'.DS.'Autoload.php';
require_once 'controllers'.DS.'indexController.php';

$controller = new indexController();

call_user_func(array($controller, 'index'));
