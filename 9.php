<?php


//Write a program to print all prime numbers from 1 to 300. (Hint: Use nested loops, break and continue)

for ($i = 1; $i <= 300; $i++) {
    $count = 0;
    for ($j = 1; $j <= $i; $j++) {

        if (($i %  $j) == 0) {

            $count++;
            // break;
        }
    }
    if ($count < 3) {
        echo $i . PHP_EOL;
    }
}
