<?php


class Course {
    public $name = "";
    
    public function __construct() {
        
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }


}
