<?php

class PostModel extends BaseModel
{
    
    public function getEntries()
    {
        $return = array();
        
        $return[0] = array('title' => 'Hello World');
        $return[1] = array('title' => 'Hello Universe');
        
    }
}