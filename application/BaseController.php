<?php

namespace application;

use application\Registry;
use application\Load;

/**
 * Class BaseController
 * 
 * @author Reginaldo
 * @access abstract
 */
abstract class BaseController
{
	
    protected  $_registry;
    protected $load;
    
    public function __construct()
    {
        $this->_registry = Registry::getInstance();
        $this->load = new Load();
    }
    
    abstract  public function index();
    
    
    public function __get($key)
    {
    	$return = $this->_registry->$key;
    	
    	if ($return) {
    		return $return;
    	}
    	
    	return false;
    }
    
}
