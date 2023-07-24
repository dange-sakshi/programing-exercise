<?php

//If the three sides of a triangle are entered through the keyboard, write a program to check whether the triangle is valid or not. The triangle is valid if the sum of two sides is greater than the largest of the three sides.

$side1 = readline('Enter side1: ');
$side2 = readline('Enter side2: ');

$side3 = readline('Enter side3: ');

$a = $side1 + $side2;
$b = $side1 + $side3;
$c = $side3 + $side2;

if ($a > $side3 && $b > $side2 && $c > $side1) {
    echo "The triangle is valid";
} else {
    echo "The triangle is not valid";
}
?>