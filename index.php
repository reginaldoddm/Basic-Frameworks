<?php

use \application\Registry;

define('DS', DIRECTORY_SEPARATOR);
define('SITE_PATH', realpath(dirname(__FILE__)) . DS);


//Require Autoload
require_once 'application'.DS.'Autoload.php';


require_once 'controllers'.DS.'indexController.php';

$registry = Registry::getInstance();
$registry->teste = 'Hello World';

$controller = new \controlles\indexController();

call_user_func(array($controller, 'index'));

echo '<pre>'.$registry->myVar.'</pre>';
