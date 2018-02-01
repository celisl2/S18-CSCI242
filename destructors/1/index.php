<?php

require_once('Student.php');

$student1 = new Student();
$student2 = new Student();

$student1->setName("Alice");
$student1->setAge(21);

$student2->setName("Alice");
$student2->setAge(21);

$student1->setBestFriend($student2);
$student2->setBestFriend($student1);

$student1 = null;
$student2->setBestFriend(null);


if($student1 === $student2)
{
    echo "They are the same student!!";
}
 else {
    echo "They are different students!!";
}