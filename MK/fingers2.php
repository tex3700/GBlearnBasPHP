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

$fngCount = $fng < 8 ? $fng : $fng % 8;

switch (true) {
    case $fngCount == 1:
        echo "Это большой палец";
        break;
    case $fngCount == 0 || $fngCount == 2:
        echo "Это указательный палец";
        break;
    case $fngCount == 3 || $fngCount == 7:
        echo "Это средний палец";
        break;
    case $fngCount == 4 || $fngCount == 6:
        echo "Это безымянный палец";
        break;
    case $fngCount == 5:
        echo "Это мезинец";
        break;
}