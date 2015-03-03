<?php
namespace controllers;

use application\BaseController;

class indexController extends BaseController
{
    
    public function __construct()
    {
    	parent::__construct();
    }
	
    public function index()
    {
    	echo __METHOD__;
    	print_r($this->_regisrty->teste);
    	
    	$this->_regisrty->myVar = 'Hello from my controller';
    }
    
}