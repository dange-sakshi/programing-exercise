<?php
//Write a program to calculate the overtime pay of 10 employees separately. Overtime is paid at the rate of Rs. 12.00 per hour for every hour worked above 40 hours. Assume that employees do not work for a fractional part of an hour. Take the number of hours worked by each employee separately, as input.

$emp = 10;
$rate = 12;
$hour = 40;
// $overt = readline('enter number: ');

for($i=1; $i<= 10; $i++){
    $overt = readline('enter number: ');
if ($overt > $hour) {
    $sub = $overt - $hour;
    $mult = $sub * $rate;
    
    echo $mult . PHP_EOL;
} else {
    echo "number is smaller than 40" . PHP_EOL;
}
    
}




?>