<?php

for ( $j=0 ; $j<2 ; $j++ ) {
    for ( $i = 0; $i < 10; $i++ ) {
        $imArr[$i] = rand (1,10);
    }
        if ( !$j ){
            $arr1 = $imArr;
        } else {
            $arr2 = $imArr;
        }
} // Создаем два массива

// print_r($arr1); print_r($arr2); // Проверка создания массивов

foreach ( $arr1 as $key => $val ) {
    $val *= $arr2[$key];
    $sumArr[] = $val;
}

print_r($sumArr);