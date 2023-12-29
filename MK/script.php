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