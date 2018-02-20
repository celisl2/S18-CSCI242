<?php

//DON'T EDIT THIS FILE!

require_once("Mammal.php");
require_once("Human.php");
require_once("Dog.php");

$cindy = new Human();
$fido = new Dog();

echo "A human communicates by saying: " . $cindy->communicate();
echo "<br>";
echo "A dog communicates by saying: " . $fido->communicate();
