<?php

namespace application\BaseController;

use application\Registry;

/**
 * Class BaseController
 * 
 * @author Reginaldo
 * @access abstract
 */
abstract class BaseController
{
	
    protected  $_regisrty;
    
    public function __construct()
    {
        $this->_regisrty = Registry::getInstance();
    }
    
    abstract  public function index();
    
}
