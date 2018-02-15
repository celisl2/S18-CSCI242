<?php

require_once('vendor/autoload.php');

use Besmer\Store\Product;

$product1= new Product();
$product1->setPrice(3.00);
$product1->setName("Trail Mix");

echo $product1->getName() . " " . $product1->getPrice();
