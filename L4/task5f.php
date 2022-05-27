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
    return ($y != 0) ? ($x / $y) : null;
}