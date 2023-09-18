<?php
//Write a program to produce the following output:

$count = 1;
for ($i = 1; $i <= 4; $i++) {
    for ($j = 4; $j >= $i; $j--) {
        echo "   ";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo $count . " ";
        echo "     ";
        $count++;
    }
    echo PHP_EOL;
}






?>