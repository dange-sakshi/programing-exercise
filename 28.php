<?php
//If the ages of Ram, Shyam and Ajay are input through the keyboard, write a program to determine the youngest of the three.


$age1 = readline('Enter Ram age: ');
$age2 = readline('Enter Shyam age: ');
$age3 = readline('Enter Ajay age: ');

if($age1 <= $age2 && $age1 <= $age3){
    echo "Ram is youngest" . PHP_EOL;
}if($age2 <= $age1 && $age2 <= $age3){
    echo "Shyam is youngest" . PHP_EOL;
}if($age3 <= $age1 && $age3 <= $age2){
    echo "Ajay is youngest" . PHP_EOL;
}


?>