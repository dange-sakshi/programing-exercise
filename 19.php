<?php
//If a four-digit number is input through the keyboard, write a program to obtain the sum of the first and last digit of this number.

$num = readline('Enter Number: ');
$sum = 0;
for($i = 4; $i >= 1; $i--){
    if($i == 4 || $i == 1){
        $sum += $num % 10;
        $num = $num / 10;
    }else{
        $sum1 = $num % 10;
        $num = $num / 10;
    }
}

echo $sum;

//$num = 1234;
//$sum=0
//$i = 4 4 >= 1
//4 == 4 || 4 == 1
//$sum += 1234 % 10
//$sum = 4
//$num = 1234 / 10
//     = 123
//$num = 123;
//$i = 3 3 >= 1
//3 == 4 || 3 == 1
//$sum1 = 123 % 10
//$sum = 3
//$num = 123 / 10
//     = 12
//$num = 12;
//$i = 2 2 >= 1
//2 == 4 || 2 == 1
//$sum1 = 12 % 10
//$sum = 2
//$num = 12 / 10
//     = 1
//$num = 1;
//$i = 1 1 >= 1
//1 == 4 || 1 == 1
//$sum += 1 % 10
//$sum = 1
//$num = 1/ 10
//     = 1
//$num = 1;

//$i = 0 0 >= 1 false



?>