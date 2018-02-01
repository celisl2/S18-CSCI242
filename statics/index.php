<?php


require_once('Rectangle.php');

$rec1 = new Rectangle();
$rec2 = new Rectangle();

echo "Rectangle 1's border is " . Rectangle::getBorderColor();
echo "Rectangle 2's border is " . Rectangle::getBorderColor();

Rectangle::setBorderColor("00FF00");

echo "Rectangle 1's border is " . Rectangle::getBorderColor();
echo "Rectangle 2's border is " . Rectangle::getBorderColor();




