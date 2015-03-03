<?php 
namespace application;

use application\Registry;

class Load
{
	
    /**
     * load model 
     * 
     * @param string $modelName model name
     * @throws \Exception
     */
    public function model($modelName)
    {
        
        $simpleName = $modelName;
        
        $modelName = $modelName.'Model';
        $modelPath = SITE_PATH.'models'.DS.$modelName.'.php';
        
        if (! is_readable($modelPath)) {
        	throw new \Exception("File {$modelPath} not found.");
        }
        
        require_once $modelPath;

        if (! class_exists($modelName)) {
            throw new \Exception("Class {$modelName} not exists.");
        }
        
 
        $registry = Registry::getInstance();
        $registry->$simpleName = new $modelName;
        
       
        
    }
    
    
}
