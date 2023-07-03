<?php
//Given the length and breadth of a rectangle, write a program to find whether the area of the rectangle is greater than its perimeter. For example, the area of the rectangle with length = 5 and breadth = 4 is greater than its perimeter.


$len = readline('Enter length of the rectangle: ');
$bre = readline('Enter breadth of the rectangle: ');

$area = $len * $bre ;
$p = 2 * ($len + $bre);

if ($area > $p){
    echo "area of rectangle is greater than the perimeter of rectangle";
}else{
     echo "area of rectangle is not greater than the perimeter of rectangle";
}
?>