<?php


class Student {
    
    private $name="";
    private $age=0;
    private $bestFriend = null;
    
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
    
    public function getBestFriend() {
        return $this->bestFriend;
    }

    public function setBestFriend($bestFriend) {
        $this->bestFriend = $bestFriend;
    }
    
    public function __destruct()
    {
        echo "The destructor was called";
    }


    
}
