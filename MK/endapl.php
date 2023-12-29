<?php

$amtApples = (int)readline("Введите колличество яблок: ");

$startStr = "яблок";
$calcStr = $amtApples % 10 ;

if ( $calcStr == 1 ) {
    $finalStr = "$startStr"."о";
} elseif ( $calcStr >=2 && $calcStr <=4 && $amtApples != 14 && $amtApples % 100 != 14 ) {
    $finalStr = "$startStr"."а";
} else {
    $finalStr = $startStr;
}

echo "$amtApples"." $finalStr.";