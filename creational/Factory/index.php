<?php

use src\BankFactory;

require 'vendor/autoload.php';


$bank = BankFactory::getBank('123');

if ($bank == null) {
    die("The card number is ivalid!!\n");
}

$bank->createAccountBank();
