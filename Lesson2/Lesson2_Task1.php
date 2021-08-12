<?php
declare(strict_types=1);

$a = 10;
$b = 2;

function calculate(int $a, int $b) {
    if ($a >= 0 && $b >= 0){
        echo $a - $b;
    }
    elseif ($a < 0 && $b < 0){
        echo $a * $b;
    }
    else{
        echo $a + $b;
    }

}

calculate($a,$b);