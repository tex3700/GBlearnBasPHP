<?php



$arr = ["str", 2, 3, 4, 5, 0, 0, 0, 0, 0];

foreach ( $arr as $var ) {
    if ( $var ) {
        for ( $i = 0; $i < 2; $i++ ){
            $newArr[] = $var;
        }
    }
}
print_r($newArr);