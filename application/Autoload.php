<?php
function autoload($class)
{
    $class = SITE_PATH.$class.'.php';
    
	if (file_exists($class)) {
	    
		require_once $class;
		
	} else {
	    
	   die("Class: {$class} not exists");
	   
	}
}

spl_autoload_register('autoload');