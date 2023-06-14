<?php
//Write a program to calculate the overtime pay of an employee. Overtime is paid at the rate of Rs. 12.00 per hour for every hour worked above 40 hours. Assume that employees do not work for a fractional part of an hour. Take the number of hours worked by the employee separately as input.

$num = readline('Enter hours: ');
$emp = 1;
$hour = 40;
$rate = 12;

if($num > $hour){
    $sub = $num - $hour;
    $mult = $sub * $rate;
    echo $mult;
}else{
    echo "$num is smaller than the 40";
}




?>