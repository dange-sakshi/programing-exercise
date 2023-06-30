<?php
//Write a program to check whether a triangle is valid or not, when the three angles of the triangle are entered through the keyboard. A triangle is valid if the sum of all the three angles is equal to 180 degrees.


$degree = 180;
$sum = 0;

for($i = 0; $i < 3; $i++){
    $angle = readline('Enter angle: ');
    $sum += $angle;
}
if($degree == $sum){
    echo "triangle is valid ";
}else{
    echo "triangle is not valid";
}




?>