<?php
//Ramesh’s basic salary is input through the keyboard. His dearness allowance is 40% of basic salary, and house rent allowance is 20% of basic salary. Write a program to calculate his gross salary.


$salary = readline('Enter Numbrs: ');
$dearness_allowance = $salary * 40 / 100;
$house_rent_allowance = $salary * 20 / 100;

$gross_salary = $salary + $dearness_allowance + $house_rent_allowance;

echo $gross_salary . PHP_EOL;
