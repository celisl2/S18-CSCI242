<?php

require_once('User.php');
require_once('Course.php');
require_once('iPrintable.php');

$course = new Course();
$course->setName('CSCI242');

$andrew = new User();
$andrew->setName("Andrew");
$andrew->setAge(21);

output($andrew);
output($course);


function output(iPrintable $output)
{
    echo $output;
}



        