<?php

use application\Request;
use application\Router;

define('DS', DIRECTORY_SEPARATOR);
define('SITE_PATH', realpath(dirname(__FILE__)) . DS);

// Require Autoload
require_once 'application' . DS . 'Autoload.php';

try {
    
    Router::route(new Request());
} catch (Exception $e) {
    
    die($e->getMessage() . '-' . $e->getFile());
}
