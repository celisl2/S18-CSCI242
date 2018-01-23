<?php

require_once('Course.php');
require_once('Student.php');

$csci242 = new Course();
$csci242->setName("Object Oriented Programming for the WWW");


$josh = new Student();
$josh->setName("Josh");
$josh->setAge(63);

$colton = new Student();
$colton->setName("Colton");
$colton->setAge(2);



$csci242->addStudent($josh);
$csci242->addStudent($colton);

echo "<h1>" . $csci242->getName() . " Students</h1>";
echo "<ul>";

foreach($csci242->getStudents() as $student)
{
    echo "<li>";
    echo $student->getName() . " is " . $student->getAge() . " years old.";
    echo "</li>";
}

echo "</ul>";
