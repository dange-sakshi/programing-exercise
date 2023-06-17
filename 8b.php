<?php
//Write a program to print the largest of 5 numbers entered by the user.

$large = 0;
for($i = 1; $i<= 5; $i++){
    $num = readline('Enter number: ');
    if($num > $large){
        $large = $num;
    }
    
}
echo "$large is a  largest number";



?>