<?php

$numArr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2, 0];

function minMaxAverage (array $arr) :array
{

    $resultArray = [
        'min' => min($arr),
        'max' => max($arr),
        'avg' => array_sum($arr) / count($arr)
    ];

    return $resultArray;
}
print_r(minMaxAverage($numArr));