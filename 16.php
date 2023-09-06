<?php
//Two numbers are input through the keyboard into two locations C and D. Write a program to interchange the contents of C and D.

$c = readline('Enter the value of c: ');
$d = readline('Enter the value of d: ');

$sum = $c + $d;
$d = $sum - $d;
$c = $sum - $c;

echo "The value of c $c" . PHP_EOL;
echo "The value of d $d" . PHP_EOL;
?>