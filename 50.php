<?php
//Write a program to add first seven terms of the following series using a for loop:

$sum = 0;
for ($i = 1; $i <= 7; $i++) {
    $multiply = 1;
    for ($j = 1; $j <= $i; $j++) {
        $multiply *= $j;
    }
    $result = $i / $multiply;
    $sum += $result;
}
echo $sum;
?>
