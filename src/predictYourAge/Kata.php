<?php

/***
 * Class Kata https://www.codewars.com/kata/5aff237c578a14752d0035ae
 */

class Kata
{
    public function predictAge($age1, $age2, $age3, $age4, $age5, $age6, $age7, $age8)
    {
        $multiply = function ($value) {
            return $value * $value;
        };

        $sum = function ($carry, $item) {
            $carry += $item;
            return $carry;
        };

        $temp = array_map($multiply,func_get_args());
        $someTemp = array_reduce($temp, $sum);

        return floor(sqrt($someTemp) / 2);
    }
}

