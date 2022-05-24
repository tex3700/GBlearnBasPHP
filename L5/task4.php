<?php

require 'Unit.php';

$unit1 = new Unit('Bob', 120, 25);
$unit2 = new Unit('Set', 150, 40);

$unit1->attack($unit2);
$unit2->attack($unit1);

print_r($unit1);
print_r($unit2);
