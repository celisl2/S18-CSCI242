<?php

require_once('iPrintable.php');

class User implements iPrintable {
    private $name = "";
    private $age = 0;
    
    public function __construct() {
        
    }
    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }
    
    public function __toString() {
        return $this->name . ' ' . $this->age;
    }


}
