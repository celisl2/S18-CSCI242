<?php

require_once('Student.php');

$student1 = new Student();
$student2 = new Student();


/*
//Example 1
$student1->setName("Andrew");
$student1->setAge(21);

$student2->setName("Andrew");
$student2->setAge(21);
*/

/*
//Example 2
$student1->setName("Andrew");
$student1->setAge(21);

$student2->setName("Alice");
$student2->setAge(21);
*/

/*
//Example 3
$student1->setName("Andrew");
$student1->setAge(21);

$student2->setName("Andrew");
$student2->setAge(21);
*/

$student1->setName("Alice");
$student1->setAge(21);

$student2->setName("Alice");
$student2->setAge(21);

$student1->setBestFriend($student2);
$student2->setBestFriend($student1);



if($student1 === $student2)
{
    echo "They are the same student!!";
}
 else {
    echo "They are different students!!";
}