<?php 
namespace application;

use application\Registry;

class Load
{
	
    /**
     * Load View
     * @param string $view
     * @param array $args
     * @throws \Exception
     * @return boolean
     */
    public static function view($view, array $args = null){
        
        $viewPath = SITE_PATH.'views'.DS.$view.'View.php';
        
        if (is_readable($viewPath)) {
        	
            if (isset($args)) {
            	extract($args);
            }
            
            require_once $viewPath;
            return true;
        }
        throw new \Exception("View {$view} not existis");
        
    }    
    
    /**
     * load model 
     * 
     * @param string $modelName model name
     * @throws \Exception
     */
    public static function model($modelName)
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
        
 
        return new $modelName;
        
       
        
    }
    
    
}
