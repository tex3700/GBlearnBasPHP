<?php

function mathAddition ( float $x, float $y ) :float
{
    return $x + $y;
}

function mathSubtraction ( float $x, float $y ) :float
{
    return $x - $y;
}

function mathMultiplication ( float $x, float $y ) :float
{
    return $x * $y;
}

function mathDivision ( float $x, float $y ) : ?float
{
    if ( $y == 0 ) {
        echo 'На 0 делить нельзя'.PHP_EOL;
        return null;
    }
    return $x / $y;
}