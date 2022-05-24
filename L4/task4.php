<?php

$numFactor = 10;

$factorialNumb = function (int $number ) use (&$factorialNumb): int {

    if ( $number === 0 || $number === 1) {
        return 1;
    }
    return $number * $factorialNumb($number - 1);
};

var_dump($factorialNumb($numFactor));
