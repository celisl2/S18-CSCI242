<?php

require_once('Rectangle.php');

class Square extends Rectangle {
    
    public function __construct() {
        
    }

    
    public function setLength($length) {
       //Check to make sure number etc....
        parent::setLength($length);
        $this->width = $length;
    }

    public function setWidth($width) {
        $this->setLength($width);
    }
    
}
