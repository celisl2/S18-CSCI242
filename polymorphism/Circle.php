<?php

require_once('Shape.php');

class Circle extends Shape {
    
    private $radius = 0;
    
    public function __construct() {
        
    }
    
    public function getRadius() {
        return $this->radius;
    }

    /*
     * Description: Set the radius that should be used for a circle because we 
     * need to ...
     * Parameters: $radius should be a float between 0 and inf
     * Returns: null
     */
    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return 3.14 * $this->radius * $this->radius;
    }

    
}
