<?php

function power(int $digit, int $power)
{
    if ($power <= 1){
        return $digit;
    }
    return power($digit,$power -1 ) * $digit;
}
//3^3 = 3 * 3 * 3
//3^4 = 3 * 3 * 3 * 3  = 3^3 * 3
//3^5 = 3 * 3 * 3 * 3 * 3 = 3^4 * 3
//3^
//n^k = n^(k-1) * n
//n^1 = n
//n^0 = 1
//n^-k = k/n

?>

<p><?php echo power(3,-2);?></<p>
