<?php

require 'vendor/autoload.php';

use Gio\Transaction;
use Ramsey\Uuid\UuidFactory;

$transaction = new Transaction(15, 'desc');

// $transaction->amount;

$transaction->process();




