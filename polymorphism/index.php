<?php

require_once('Rectangle.php');
require_once('Square.php');

$rectangle1 = new Rectangle();

$rectangle1->setLength(5);
$rectangle1->setWidth(3);

$rectangle1->setColor('orange');

echo "The rectangle is " . $rectangle1->getWidth() . " wide and " 
        . $rectangle1->getLength() . " high and it's current color is " 
        . $rectangle1->getColor() . " & the area is " . $rectangle1->getArea();




$square1 = new Square();

$square1->setLength(5);
$square1->setWidth(5);

$square1->setColor('blue');

echo "The square is " . $square1->getWidth() . " wide and " 
        . $square1->getLength() . " high and it's current color is " 
        . $square1->getColor()  . " & the area is " . $square1->getArea();
  