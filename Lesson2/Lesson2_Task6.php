<?php


function power($n, $k)
{

    return power($n,$k -1 ) * $n;
}
//3^3 = 3 * 3 * 3
//3^4 = 3 * 3 * 3 * 3  = 3^3 * 3
//3^5 = 3 * 3 * 3 * 3 * 3 = 3^4 * 3
//3^

//n^k = n^(k-1) * n