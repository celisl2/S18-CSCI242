<?php

require_once('Student.php');

$laura = new Student('Laura', 3);


echo $laura->getName() . " is " . $laura->getAge();

