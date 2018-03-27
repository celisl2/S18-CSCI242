<?php

require_once('vendor/autoload.php');

use Besmer\Controller\PeopleController;

$peopleController = new PeopleController();

$path = explode("/", $_SERVER["PATH_INFO"]);

if($_SERVER["REQUEST_METHOD"] == "GET")
{
    if($path[1] == "people")
    {
        echo $peopleController->people();
    }
    else if($path[1] == "person")
    {
        echo $peopleController->person($path[2]);
    }
    else {
        header("404 Not Found");
        echo "Page not found";
    }
}

