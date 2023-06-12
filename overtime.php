<?php
//Write a program to calculate the overtime pay of 10 employees.
// Overtime is paid at the rate of Rs. 12.00 per hour for every hour worked above 40 hours. Assume that employees do not work for a fractional part of an hour.


$emp = 10;
$rate = 12;
$hour = 40;
$overt =400;

$ceil = (ceil($overt));

if($ceil > $hour){
    $sub = $ceil - $hour;
    $mult = $sub * $rate;
    $result = $mult * 10;
    echo $result;
}else{
    echo "number is smaller than 40";
}

//$overt = 48;
//48 > 40  yes
//$sub = 48 - 40 =8
//$mult = $sub * 12= 96
//$result = 96 * 10 = 960 Rs

//$overt = 400;
// 400 > 40    yes
//$sub = 400-40 = 360
//$mult = 360 * 12 = 4320
//$result = 4320 *10 = 43200


//$overt = 55.5;
//$ceil = (ceil (55.5)); = 56
//56 > 40  yes
//$sub = 56 - 40 = 16
//$mult = 16 *12 = 192
//$result = 192 * 10 = 1920

//$overt = -400;
//number is smaller than the 40.




?>