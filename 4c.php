<?php
//Write a program that first takes the following inputs:
//- number of customers
//- interest rate for a loan
//Then for each customer up to the number of customers entered above, take as input the principal amount and duration in years and print total simple interest to be paid on the loan.
$cust = readline('Enter no of cust: ');
for ($i = 0; $i < $cust; $i++) {
    $amount = readline('Enter amount: ');
    $rate = readline('Enter rate: ');
    $year = readline('Enter duration in years: ');


    $totalInt = $amount * $rate * $year /100;
    echo $totalInt . PHP_EOL;


    // $i = 0;
    // 0 <= 10;
    // $amount = 10000;
    // $rate = 2;
    // $year=2;
    // $totalInt = 10000*2*2/100;
    //  $totalInt = 400;
}
