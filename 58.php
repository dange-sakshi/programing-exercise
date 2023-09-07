<?php
//A machine is purchased which will produce earning of Rs. 1000 per year while it lasts. The machine costs Rs. 
//6000 and will have a salvage of Rs. 2000 when it is condemned. If 12 percent per annum can be earned on alternate investments what would be the 
//minimum life of the machine to make it a more attractive investment compared to alternative investment?


$earning = 1000;
$second = 12;
$machin_rate = 6000;
$salvage_rate = 2000;

$percentage = ($second * $machin_rate) / 100;
$a = $earning - $percentage;
$b = $machin_rate - $salvage_rate;
$year = $b / $a;
echo $year;
?>