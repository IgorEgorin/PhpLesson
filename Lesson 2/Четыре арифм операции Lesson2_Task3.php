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

?>

<p><?php echo (summary($a,$b));?></<p>
<p><?php echo (deduct($a,$b));?></<p>
<p><?php echo (multiple($a,$b));?></<p>
<p><?php echo (divide($a,$b));?></<p>
