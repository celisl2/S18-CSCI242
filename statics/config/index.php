<?php

require_once('Config.php');

Config::setKey("username","root");
Config::setKey("password","thePass");

echo Config::getKey("username");

