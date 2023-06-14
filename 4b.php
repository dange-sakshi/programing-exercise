<?php
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