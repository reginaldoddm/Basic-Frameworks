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
    	
    	$data['title'] = 'Dynamic Title';
    	$data['posts'] = $this->Post->getEntries();
    	
    	$this->load->view('index', $data);
    }
    
}