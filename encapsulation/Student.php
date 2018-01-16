<?php


class Student {
    
    private $name = "";
    private $age = 0;
    
    public function __construct($name = '', $age = 0)
    {
        $this->setName($name);
        $this->setAge($age);
        //echo "Constructor was called";
        
    }
    
    //Accessor
    public function getName()
    {
        return $this->name;
    }
    
    //Mutator
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        if(is_numeric($age)  && (int)$age == $age && $age < 150 && $age >= 0)
        {
            $this->age = $age;
        }

    }


    
}
