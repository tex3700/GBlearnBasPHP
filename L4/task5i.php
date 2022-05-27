<?php

require 'task5f.php';

function mathOperation(float $x, float $y, $operation) : ?float
{
    return $operation($x,$y);
}

$div = 'mathDivision';
$multi = 'mathMultiplication';
$add = 'mathAddition';
$sub = 'mathSubtraction';

var_dump( mathOperation(0.3,0.1, $div) );
var_dump( mathOperation(0.3,0.1, $multi) );
var_dump( mathOperation(0.3,0.1, $add) );
var_dump( mathOperation(0.3,0.1, $sub) );