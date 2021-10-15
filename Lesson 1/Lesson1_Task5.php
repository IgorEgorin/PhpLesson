<?php

$a = 1;
$b = 2;

$a+= $b;
$b = $a - $b;
$a -= $b;

var_dump($a);
var_dump($b);

//TODO разобраться откуда
