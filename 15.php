<?php
//The length & breadth of a rectangle and radius of a circle are input through the keyboard. Write a program to calculate the area & perimeter of the rectangle, and the area & circumference of the circle.


 $length = readline('Enter length: ');
 $breadth = readline('Enter breadth: ');
 $rA = $length * $breadth;
 $pr = 2*($length + $breadth);

$radius = readline('Enter radius: ');
 $cA = 3.14 * $radius*$radius;
 $cc = 2*3.14*$radius;

echo "$rA Area of Rectangle" . PHP_EOL;
echo "$pr Perimeter of the Rectangle"  . PHP_EOL;
echo "$cA Area of the circle" . PHP_EOL ;
echo "$cc circumference of the circle." . PHP_EOL;

?>