<?php

require 'vendor/autoload.php';

use Ramsey\Uuid\UuidFactory;

$id = new UuidFactory();

echo $id->uuid4();

