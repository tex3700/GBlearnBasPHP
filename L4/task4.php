<?php

$numFactor = 10;

$factorialNumb = function (int $number ,Closure $functionRev , int $result = 1) : int {
    $result *= $number;
    $number--;
    if ( $number ) {
        return $functionRev($number,$functionRev,$result);
    }
    return $result;
};

$revers = $factorialNumb;

var_dump($factorialNumb($numFactor, $revers));
