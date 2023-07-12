<?php
//Write a program to print the largest of 5 numbers entered by the user.

$large = 0;
$count = 5;
for($i = 1; $i<= $count; $i++){
    $num = readline('Enter number: ');
    if($i == 1){
        $large = $num;
    }
    if($num > $large){
        $large = $num;
    }
    
}
echo "$large is a  largest number";



?>