<?php
function autoload($class)
{
    $class = SITE_PATH.$class.'.php';
    
	if ( ! file_exists($class)) {
	    throw new Exception("File {$class} not found");	
	} 
	
	require_once $class;
}

spl_autoload_register('autoload');
