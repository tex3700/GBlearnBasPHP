<?php

do {
    $queBptRus = (int)readline("В каком году произошло крещение Руси?\nВарианты ответа: 740 год, 810 год, 990 год.\n");
    $incorrectAnswer = 0;
    if ( $queBptRus == 740 || $queBptRus == 810 ) {
        echo "Ответ не верный.";
        $incorrectAnswer ++;
    } elseif ( $queBptRus == 990 ) {
        echo "Поздравляю, Вы хорошо знаете историю, ответ верный.";
        $incorrectAnswer ++;
    }
} while ($incorrectAnswer == 0);

