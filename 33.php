<?php
//Given the coordinates (x, y) of a center of a circle and it’s radius, write a program which will determine whether a point lies inside the circle, on the circle or outside the circle. (Hint: Use sqrt( ) and pow( ) functions)


$x1 = readline('Enter point x1: ');
$y1 = readline('Enter point y1: ');
$x2 = readline('Enter point x2: ');
$y2 = readline('Enter point y2: ');
$radius = readline('Enter Radius: ');

$d = sqrt((pow($x2 - $x1, 2)) + (pow($y2 - $y1, 2))) ;

if($d > $radius){
    echo "point lies outside the circle";
}elseif($d < $radius){
    echo "point lies inside the circle";
}else{
    echo "point lies on the circle";
}

//  $a= pow(1,2);
//  $b = sqrt(26);
//  echo $a;
//  echo $b;
?>