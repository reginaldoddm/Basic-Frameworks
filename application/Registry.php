<?php

namespace application;

class Registry
{

    private static $_instance;
    
    private $_storage;
    
    
    private function __construct(){}
    
    
    /**
     * Retorna a instancia do objeto
     * 
     * @return Registry
     */
    public static function getInstance()
    {
        
        if ( ! self::$_instance instanceof self) {
        	self::$_instance = new Registry();
        }
        
        return self::$_instance;
    }
    
    /**
     * Método magico set
     * 
     * @param mixed $key
     * @param mixed $val
     */
    public function __set($key, $val)
    {
        $this->_storage[$key] = $val;
    }
    

    /**
     * Método magico get
     * 
     * @param mixed $key
     * @return mixed
     */
    public function __get($key)
    {
        if (isset($this->_storage[$key])) {
        	return $this->_storage[$key];
        }
    }
}
