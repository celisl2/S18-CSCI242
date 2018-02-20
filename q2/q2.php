<?php
//DON'T EDIT THIS FILE!

require_once("SimpleAccount.php");

$account1 = new SimpleAccount();

$account1->deposit(100.50);

$account1->withdrawal(50.25);

echo "Account balance is: " . $account1->getBalance();  //50.25
