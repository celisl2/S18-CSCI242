<?php

require_once('vendor/autoload.php');

use Forecast\Forecast;

$forecast = new Forecast('ad7ef7d2d1a37a2689d9e36d4495e3bb');

$weather = $forecast->get('34.939976','-81.028567');

echo "The current weather is: " . $weather->currently->temperature . " degrees "
        . "and the humidity is " . $weather->currently->humidity;

