<?php

namespace Besmer\Store;

class Product {
    private $name = "";
    private $price = 0.0;
    public function __construct() {
        
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setPrice($price) {
        $this->price = $price;
    }


}
