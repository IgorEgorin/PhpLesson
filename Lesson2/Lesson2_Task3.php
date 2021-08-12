<?php


$a = 10;
$b = 2;

function summary(int $a, int $b) {
    return $a + $b;
}

function deduct(int $a, int $b) {
    return $a - $b;
}

function multiple(int $a, int $b) {
    return $a * $b;
}

function divide(int $a, int $b) {
    return $a / $b;
}

var_dump(summary($a,$b));
var_dump(deduct($a,$b));
var_dump(multiple($a,$b));
var_dump(divide($a,$b));
