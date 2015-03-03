<?php

namespace application;

class Request
{
	private $_controller;
	
	private $_method;
	
	private $_args;
	
	
	public function __construct()
	{

		$parts = explode('/', $_SERVER['REQUEST_URI']);
		
		
		echo '<pre>';
		  var_dump($parts);
		echo '</pre>';
	}
}