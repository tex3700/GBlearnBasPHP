<?php

$numArr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2, 0];

function minMaxAverage (array $arr) :array
{
    asort($arr);
    $avg = array_sum($arr) / count($arr);

    $resultArray = [
        'min' => current($arr),
        'max' => end($arr),
        'avg' => $avg
    ];

    return $resultArray;
}
print_r(minMaxAverage($numArr));