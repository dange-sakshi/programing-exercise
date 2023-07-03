<?php
//Given three points (x1, y1), (x2, y2) and (x3, y3), write a program to check if all the three points fall on one straight line.


$point1 = readline('Enter points x1: ');
$point2 = readline('Enter points y1: ');
$point3 = readline('Enter points x2 : ');
$point4 = readline('Enter points y2: ');
$point5 = readline('Enter points x3: ');
$point6 = readline('Enter points y3: ');

$a = ($point3 - $point1) / ($point4 - $point2);
$b = ($point5 - $point3) / ($point6 - $point4);

if($a == $b){
    echo " all the three points fall on one straight line";
}else{
    echo " all the three points not fall on one straight line";
}

?>