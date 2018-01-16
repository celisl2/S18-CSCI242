<?php

require_once('Student.php');

$josh = new Student();  //__construct();
$jalen = new Student(); //__construct();

//Does not work!
//$josh->name = "Josh";
//echo $josh->name;

$josh->setName("Josh");
$josh->setAge(35);

echo $josh->getName();
echo " is " . $josh->getAge();

$jalen->setName("Jalen");
//$jalen->setAge("Twenty Six");
$jalen->setAge("26");

echo $jalen->getName();
echo " is " . $jalen->getAge();

