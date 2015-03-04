<?php
namespace application;

class Request
{

    private $_controller;

    private $_method;

    private $_args;
    
    private $segmets;

    
    /**
     * Construtor trata a REQUEST_URI e aloca o controller, method 
     * e os demais argumentos
     * 
     * @access public
     * @return void
     */
    public function __construct()
    {
        $parts = explode('/', $_SERVER['REQUEST_URI']);
        $parts = $this->parts($parts);
        
        $this->segmets = $parts;
        
        $this->_controller = ($c = array_shift($parts)) ? $c : 'index';
        $this->_method     = ($c = array_shift($parts)) ? $c : 'index';
        $this->_args       = (isset($parts[0])) ? $parts : array();
    }
    
    /**
     * Permite que você recupere um segmento específico da ULR
     * 
     * @param array $segment
     * @param mixed $return
     * @return string
     */
    public function getSegment($segment, $return = null)
    {
        return  (isset($this->segmets[(int)$segment])) ? : $return;
    }

    /**
     * Resgata o controller atual
     */
    public function getController()
    {
        return $this->_controller;
    }
    
    /**
     * Resgata o método atual
     */
    public function getMethod()
    {
        return $this->_method;
    }
    
    
    /**
     * Trata as parte da REQUEST_URI
     * 
     * @access private
     * @param array $parts
     * @return array |boolean
     */
    private function parts(array $parts)
    {
        $basePath = trim($_SERVER['SCRIPT_NAME'], '/');
        
        if (strpos($basePath, '/') !== false) {
            $basePath = explode('/', $basePath);
        }
        
        if (count($parts) > 0) {
            $newParts = array();
            
            foreach ($parts as $key => $value) {
                $basePath = (is_array($basePath)) ? $basePath[0] : $basePath;
                
                if ($basePath == $value) {
                    $value = '';
                }
                
                //Remove variaveis vazias
                if (!empty($value)) {
                    $newParts[] = $value;
                }
            }
            
            return $newParts;
            
        }
        return false;
 
    }
}
    
    