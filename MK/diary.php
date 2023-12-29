<?php

$name = readline("Привет как Вас зовут? ");
echo "Приятно познакомиться $name";

$age = readline(", сколько Вам лет? ");
if ( $age % 10 == 1 && $age != 11){
    $strYears = "год";
} elseif ( $age % 10 == 2 && $age != 12 || $age % 10 == 3 && $age != 13 || $age % 10 == 4 && $age != 14){
    $strYears = "года";
} else {
    $strYears = "лет";
}

echo "Вас зовут $name \nВам $age $strYears\n";

do {
    $howManyDeal = (int)readline("Сколько дел запланировано на сегодняшний день (введите число не больше 20)\n");
    $incorrectAnswer = 0;
    if ( $howManyDeal <= 0 || $howManyDeal > 20 ) {
        echo "Необходимо корректно ввести колличество запланированных дел\n";
    } else{
        $incorrectAnswer++;
    }
} while ($incorrectAnswer == 0);

$totalTime = 0;
$strDeal = "Список ваших дел:\n";;

for ( $i = 0; $i < $howManyDeal; $i++) {
    $countDeal = $i + 1;
    $dealToday = (string)readline ("Какая $countDeal задача стоит перед вами сегодня? \n:");

    do {
        $howLongDeal = (float)readline ("Сколько примерно времени эта задача займет в часах? \n:");
        $incorrectAnswer = 0;
        if ( $howLongDeal <=0 ) {
            echo "Необходимо корректно ввести колличество запланированных часов\n";
        } else{
            $incorrectAnswer ++;
        }
    } while ($incorrectAnswer == 0);

    $strDeal = "$strDeal" . " $dealToday" . " ($howLongDeal),\n";
    $totalTime = $totalTime + $howLongDeal;
}

echo "$name, $strDeal\nПримерное время выполнения плана на день = $totalTime ч.";