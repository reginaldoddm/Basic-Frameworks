<?php

<<<<<<< HEAD
namespace controllers\indexController;
=======
namespace controllers;
>>>>>>> 332a1d4eb81308ba8afb3db7fe31aa8d70d841cf

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