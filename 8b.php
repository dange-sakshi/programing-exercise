<?php
//Write a program to print the largest of 5 numbers entered by the user.

$large = 0;
for($i = 1; $i<= 5; $i++){
    if($i > $large){
        $large = $i;
    }
    
}
echo $large;



?>