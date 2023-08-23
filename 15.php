<?php
//The length & breadth of a rectangle and radius of a circle are input through the keyboard. Write a program to calculate the area & perimeter of the rectangle, and the area & circumference of the circle.


$length = readline('Enter length: ') . PHP_EOL;
$breadth = readline('Enter breadth: ') . PHP_EOL;
$radius = readline('Enter radius: ') . PHP_EOL;
$rectangle_area = $length * $breadth;
$perimeter = 2 * ($length + $breadth);

$circle_area = 3.14 * $radius * $radius;
$circumference = 2 * 3.14 * $radius;

echo "$rectangle_area Area of Rectangle" . PHP_EOL;
echo "$perimeter Perimeter of the Rectangle"  . PHP_EOL;
echo "$circle_area Area of the circle" . PHP_EOL;
echo "$circumference circumference of the circle." . PHP_EOL;
?>