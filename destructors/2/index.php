<?php

require_once('Logger.php');

$log = new Logger('error.log');
$log2 = new Logger('lessSeriousErrors.log');

$log->error("The program broke!");
$log2->error("The program is kinda broke.");

