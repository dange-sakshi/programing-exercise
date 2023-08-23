<?php
//Temperature of a city in Fahrenheit degrees is input through the keyboard. Write a program to convert this temperature into Centigrade degrees.

$fahrenheit  = readline('Enter Temperature: ');
$centigrade = ($fahrenheit  - 32)* (5/9);
echo "$centigrade in centigrade degree";





?>