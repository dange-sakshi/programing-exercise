<?php
//When interest compounds q times per year at an annual rate of r % for n years, the principle p compounds to an amount a as per the following formula

//Write a program to read 10 sets of p, r, n & q and calculate the corresponding as.

for($i = 0; $i < 10; $i++){
    $p = readline('Enter principle: ');
    $r = readline('Enter rate: ');
    $n = readline('Enter time in year: ');
    $q = readline('Enter interest compound: ');

    $a = $p * (pow((1+$r/$q),$n*$q));

    echo $a. PHP_EOL;
}




?>