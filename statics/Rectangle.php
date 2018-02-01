<?php

require_once('Shape.php');

class Rectangle extends Shape {

    private $length = 0;
    private $width = 0;
    
    private static $border = "FF0000";
    
    public function __construct() {
        
    }

    public function getLength() {
        return $this->length;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setLength($length) {
        $this->length = $length;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public static function getBorderColor()
    {
        return self::$border;
    }
    
    public static function setBorderColor($color)
    {
        var_dump($this);
        self::$border = $color;
    }
    
}
