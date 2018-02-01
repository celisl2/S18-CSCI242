<?php

require_once('Rectangle.php');
require_once('Square.php');
require_once('Circle.php');

$shapes = array();

$rectangle1 = new Rectangle();

$rectangle1->setLength(5);
$rectangle1->setWidth(3);

$rectangle1->setColor('orange');

$shapes[] = $rectangle1;

echo "The rectangle is " . $rectangle1->getWidth() . " wide and " 
        . $rectangle1->getLength() . " high and it's current color is " 
        . $rectangle1->getColor() . " & the area is " . $rectangle1->getArea();




$square1 = new Square();

$square1->setLength(5);
$square1->setWidth(5);

$square1->setColor('blue');

$shapes[] = $square1;

echo "The square is " . $square1->getWidth() . " wide and " 
        . $square1->getLength() . " high and it's current color is " 
        . $square1->getColor()  . " & the area is " . $square1->getArea();
  

$circle1 = new Circle();

$circle1->setRadius(5);


$circle1->setColor('green');

$shapes[]=$circle1;

echo "The circle has a radius of " . $circle1->getRadius() 
        . " and it's current color is " 
        . $circle1->getColor()  . " & the area is " . $circle1->getArea();
  

echo "The total area of all my shapes is ";

$sum = 0;
foreach($shapes as $shape)
{
    $sum+= $shape->getArea();
}


echo $sum;
