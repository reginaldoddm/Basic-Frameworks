<?php

define('DS', DIRECTORY_SEPARATOR);
define('SITE_PATH', realpath(dirname(__FILE__)) . DS);


//Require core files
require_once SITE_PATH.'application'.DS.'Request.php';
require_once SITE_PATH.'application'.DS.'Router.php';
require_once SITE_PATH.'application'.DS.'BaseController.php';
require_once SITE_PATH.'application'.DS.'BaseModel.php';
require_once SITE_PATH.'application'.DS.'Load.php';
require_once SITE_PATH.'application'.DS.'Registry.php';


var_dump(get_included_files());
