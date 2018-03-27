<?php

//var_dump($_SERVER);


$path = explode('/', $_SERVER["PATH_INFO"]);
var_dump($path);

if($_SERVER["REQUEST_METHOD"] == "GET")
{
    if($path[1] == "home")
    {
        echo "Home page!";
    }
    else if($path[1] == "about")
    {
        echo "About page";
    }
    else if($path[1] == "hello")
    {
        echo "Hello " . $path[2];
    }
    else {
        echo "Error 404!";
    }
}
