<?php
//Write a program to find the range of a set of numbers. Range is the difference between the smallest and biggest number in the list.


$large = 0;
$small = 0;
$count = 7;
for($i = 1; $i <= $count; $i++){
    $num = readline('Enter Number: ');
    if($num > $large){
        $large = $num;
    }
    if($i == 1){
        $small = $num;
    }
    if($num < $small){
        $small=$num;
    }
}
$range = $large - $small;
echo $range;





?>