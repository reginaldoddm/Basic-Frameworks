<?php

use application\Registry;

abstract class BaseController
{
	
    protected  $_regisrty;
    
    public function __construct()
    {
        $this->_regisrty = Registry::getInstance();
    }
    
    abstract  public function index();
    
}
