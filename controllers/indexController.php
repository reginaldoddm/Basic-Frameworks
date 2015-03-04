<?php
namespace controllers;

use application\BaseController;
use application\Load;

class indexController extends BaseController
{
    
    public function __construct()
    {
    	parent::__construct();
    }
	
    public function index()
    {
    	
    	$posts = Load::model('Post');
    	
    	$data['title'] = 'Dynamic Title';
    	$data['posts'] = $posts->getEntries();
    	
    	Load::view('index', $data);
    }
    
    
    public function test()
    {
        echo __METHOD__;
    }
    
}