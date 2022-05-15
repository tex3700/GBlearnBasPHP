<?php

$arr = [];

for ( $i = 0; $i < 100; $i++ ) {

    do {
        $num = rand(1,200);
    } while (in_array( $num, $arr ));

        $arr[] = $num;
}
print_r($arr);
