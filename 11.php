<?php
//Ramesh’s basic salary is input through the keyboard. His dearness allowance is 40% of basic salary, and house rent allowance is 20% of basic salary. Write a program to calculate his gross salary.


$salary = readline('Enter Numbrs: ');
$da = $salary * 40 / 100;
$hra = $salary * 20 / 100;

$grosss = $salary + $da + $hra;

echo $grosss;

//$salary = 40000;
//$da = 40000 * 40 / 100; = 16000
//$hra = 20000 * 20 / 100; = 8000
//$grosss = 40000 + 16000 +8000;
//$grosss = 64000;
?>