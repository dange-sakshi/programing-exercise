<?php
//Write a program to take 3 numbers of digits from the user.
//Then generate all 4 digit unique permutations of those digits using a for loop.

$a = readline('Enter number1: ');
$b = readline('Enter number2: ');
$c = readline('Enter number3: ');


for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        for ($k = 1; $k <= 3; $k++) {
            for ($l = 1; $l <= 3; $l++) {
                if ($i == 1) {
                    echo $a;
                } elseif ($i == 2) {
                    echo $b;
                } else {
                    echo $c;
                }

                if ($j == 1) {
                    echo $a;
                } elseif ($j == 2) {
                    echo $b;
                } else {
                    echo $c;
                }

                if ($k == 1) {
                    echo $a;
                } elseif ($k == 2) {
                    echo $b;
                } else {
                    echo $c;
                }
                if ($l == 1) {
                    echo $a;
                } elseif ($l == 2) {
                    echo $b;
                } else {
                    echo $c;
                }
                echo PHP_EOL;
            }
        }
    }
}
