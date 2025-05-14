<?php

require_once 'Transaction.php';

$transaction = new Transaction(15, 'hello');

$transaction->addTax(8);
$transaction->applyDiscount(8);

var_dump($transaction->getAmount());


