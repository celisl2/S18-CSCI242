<?php

require_once('vendor/autoload.php');

use Laura\Bank\Customer;
use Laura\Bank\BankAccount;


$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

$args = array();

$alice = new Customer();
$alice->setName('Alice');

$bob = new Customer();
$bob->setName('Bob');

$aliceChecking = new BankAccount();
$alice->addAccount($aliceChecking);
$aliceChecking->deposit(3000);


$bobChecking = new BankAccount();
$bobSavings = new BankAccount();
$bob->addAccount($bobChecking);
$bob->addAccount($bobSavings);
$bobChecking->deposit(300);
$bobSavings->deposit(3000);

$args['customers'] = array($alice, $bob);

echo $twig->render('index.html.twig', $args);