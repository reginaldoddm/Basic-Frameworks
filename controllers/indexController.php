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
    	$this->load->model('Post');
    	
    	echo '<pre>';
    	var_dump($this->Post->getEntries());
    	echo '</pre>';
    }
    
}