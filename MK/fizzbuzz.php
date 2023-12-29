<?php

for ( $i = 1; $i <= 100; $i++ ) {

    $firstStr = $i % 3 == 0 ? "Fizz" : null ;
    $secondStr = $i % 5 == 0 ? "Buzz" : null ;
    $firdStr = $firstStr != null || $secondStr != null ? null : $i ;

    echo "$firstStr"."$secondStr"."$firdStr"."\n";
}
