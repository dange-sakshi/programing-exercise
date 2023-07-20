<?php


//Write a program to print all prime numbers from 1 to 300. (Hint: Use nested loops, break and continue)

for ($i = 2; $i <= 300; $i++) {
    $count = 0;
    for ($j = 2; $j <= $i/2; $j++) {
         
        if (($i %  $j) == 0) {

            $count = 1;
            break;
        }
    }
    if ($count == 1) {
        continue;
        
    }
    echo $i . PHP_EOL;
}
