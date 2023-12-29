<?php

do {
    $fng = (int)readline("Введите натуральное число:\n");
    $incorrectAnswer = 0;
    if ( $fng <= 0  ) {
        echo "Необходимо ввести натуральное число!\n";
    } else{
        $incorrectAnswer ++;
    }
} while ($incorrectAnswer == 0);

$bigFng = 1;
$indexFng = 2;
$middleFng = 3;
$ringFng = 4;
$pinkyFng = 5;

while ( $fng > $pinkyFng ) {
    $ringFng = $pinkyFng + 1;
    $middleFng = $ringFng + 1;
    $indexFng = $middleFng + 1;
    $bigFng = $indexFng + 1;
    if ( $fng > $bigFng ) {
        $indexFng = $bigFng + 1;
        $middleFng = $indexFng + 1;
        $ringFng = $middleFng + 1;
        $pinkyFng = $ringFng + 1;
    } else {
        break;
    }
}

switch ($fng) {
    case $bigFng:
        echo "Это большой палец";
        break;
    case $indexFng:
        echo "Это указательный палец";
        break;
    case $middleFng:
        echo "Это средний палец";
        break;
    case $ringFng:
        echo "Это безымянный палец";
        break;
    case $pinkyFng:
        echo "Это мезинец";
        break;
}