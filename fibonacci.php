<?php

/**
 * Calculate the Fibonacci number of a given number.
 *
 * @param $number
 * @return float
 */
function fibonacci($number)
{
    if ($number < 3) {
        return $number;
    }

    return round(1.618 ** $number / 2.236);
}

fscanf(STDIN, '%i', $limit);