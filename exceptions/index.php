<?php

require_once('User.php');
require_once('Movie.php');
require_once('Mp4Stream.php');
require_once('NoSubscriptionException.php');
require_once('RatedRException.php');


$colton = new User();
$colton->setUsername("Colton");
$colton->setAge(2);

$home = new Movie();
$home->setRating("G");
$home->setTitle("Home[2016]");

try {
    Mp4Stream::getMp4Stream($home, $colton);
}
catch(NoSubscriptionException $ex)
{
    echo "Please purchase a subscription";
}




