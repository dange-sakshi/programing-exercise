<?php

//Write a program to generate all unique combinations of 1, 2 and 3 using a for loop.


for ($a = 1; $a <= 3; $a++) {
    for ($b = 1; $b <= 3; $b++) {
        for ($c = 1; $c <= 3; $c++) {
            echo $a . $b . $c . PHP_EOL ;
        }
    }
}


