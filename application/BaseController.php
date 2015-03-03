<?php


/**
 * 
 * Class BaseController
 *
 * @author Reginaldo
 * @abstract
 * 
 */

namespace application;

use application\Registry;
use application\Load;

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
