<?php 
$x = 1;

$text = <<<TEXT
line 1 $x
line 2
line 2
TEXT;


echo nl2br($text);