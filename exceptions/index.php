<?php

require_once('User.php');
require_once('Movie.php');
require_once('Mp4Stream.php');
require_once('NoSubscriptionException.php');
require_once('RatedRException.php');


$colton = new User();
$colton->setUsername("Colton");
$colton->setAge(2);
$colton->setSubscription(true);

$home = new Movie();
$home->setRating("G");
$home->setTitle("Home[2016]");

/*
try {
    echo Mp4Stream::getMp4Stream($home, $colton);
}
catch(NoSubscriptionException $ex)
{
    echo "Please purchase a subscription";
}
 * 
 */


$it = new Movie();
$it->getTitle("It[2017]");
$it->setRating('R');

/*
try {
    echo Mp4Stream::getMp4Stream($it, $colton);
}
catch(NoSubscriptionException $ex)
{
    echo "Please purchase a subscription";
}
catch(RatedRException $ex)
{
    echo "Sorry, you aren't able to watch movies rated R.";
}

try {
    echo Mp4Stream::getMp4Stream($it, $colton);
}
catch(Exception $ex)
{
    //mail the admin and let them know some error has occured
    //show a picture of a unicorn and say sorry
}

*/

try {
    echo Mp4Stream::getMp4Stream($it, $colton);
    //another line of code
}
catch(NoSubscriptionException $ex)
{
    echo "Please purchase a subscription";
}
catch(RatedRException $ex)
{
    echo "Sorry, you aren't able to watch movies rated R.";
}
catch(Exception $ex)
{
    //mail the admin and let them know some error has occured
    //show a picture of a unicorn and say sorry
}