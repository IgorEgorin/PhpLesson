<?php


$arg1 = 10;
$arg2 = 2;

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

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'summary':
            echo summary($arg1,$arg2);
            break;
        case "deduct":
            echo deduct($arg1,$arg2);
        case "multiple":
            echo deduct($arg1,$arg2);
        case "divide":
            echo deduct($arg1,$arg2);
            break;
    }
}

mathOperation($arg1,$arg2,'summary');