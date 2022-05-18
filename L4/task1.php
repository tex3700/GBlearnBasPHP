<?php

$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2, 0];

$evenOdd = function (int $number) : string {

    if ( $number == 0 ) {
        return "{$number} - Ноль";
    } elseif ( $number & 1 ) {
        return "{$number} - Нечетное";
    } else {
        return "{$number} - Четное";
    }
};

$result = array_map( $evenOdd, $arr );
print_r($result);