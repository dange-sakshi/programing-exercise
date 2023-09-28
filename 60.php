<?php

//The natural logarithm can be approximated by the following series.
//If x is input through the keyboard, write a program to calculate the sum of first seven terms of this series.

$x = readline('Enter value of x: ');
$sum = 0;
$term = ($x - 1) / $x;
for ($i = 2; $i <= 7; $i++) {
    $common = pow(($x - 1) / $x, $i);
    $divide = $common / 2;
    $sum += $divide;
}
$total = $sum + $term;
echo $total;
?>