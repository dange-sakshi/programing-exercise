<?php
//If the three sides of a triangle are entered through the keyboard, write a program to check whether the triangle is isosceles, equilateral, scalene or right angled triangle.

$side1 = readline('Enter side1: ');
$side2 = readline('Enter side2: ');
$side3 = readline('Enter side3: ');

if ($side1 == $side2 && $side2 == $side3) {
    echo "The triangle is equilateral";
} elseif (($side1 * $side1) + ($side2 * $side2) == ($side3 * $side3) || ($side1 * $side1) + ($side3 * $side3) == ($side2 * $side2) || ($side2 * $side2) + ($side3 * $side3) == ($side1 * $side1)) {
    echo "The triangle is right angle triangle";
} elseif ($side1 == $side2 || $side1 == $side3 || $side2 == $side3) {
    echo "The triangle is isosceles";
} elseif ($side1 != $side2 && $side1 != $side3 && $side2 != $side3) {
    echo "The triangle is scalene";
}
