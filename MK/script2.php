<?php

$name = readline("Привет как Вас зовут? ");
echo "Приятно познакомиться $name";

$age = readline(", сколько Вам лет? ");
if ( $age%10 == 1 && $age != 11){
    $strYears = "год";
} elseif ( $age%10 == 2 && $age != 12 || $age%10 == 3 && $age != 13 || $age%10 == 4 && $age != 14){
    $strYears = "года";
} else {
    $strYears = "лет";
}

echo "Вас зовут $name \nВам $age $strYears";

$dealToday1 = readline ("Какая задача стоит перед вами сегодня? \n:");
$howLongDeal1 = (float)readline ("Сколько примерно времени эта задача займет в часах? \n:");

$dealToday2 = readline ("Какая ещё задача стоит перед вами сегодня? \n:");
$howLongDeal2 = (float)readline ("Сколько примерно времени эта задача займет в часах? \n:");

$dealToday3 = readline ("Какая ещё задача стоит перед вами сегодня? \n:");
$howLongDeal3 = (float)readline ("Сколько примерно времени эта задача займет в часах? \n:");

$totalTime = $howLongDeal1 + $howLongDeal2 + $howLongDeal3;

echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:\n
- $dealToday1 ($howLongDeal1)\n
- $dealToday2 ($howLongDeal2)\n
- $dealToday3 ($howLongDeal3)\n
Примерное время выполнения плана = $totalTime ч.";