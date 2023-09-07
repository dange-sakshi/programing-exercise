<?php
//Write a program to print the multiplication table of the number entered by the user. The table should get displayed in the following form.
//29 * 1 = 29
//29 * 2 = 58

$number = readline('Enter number: ');
for ($i = 1; $i <= 10; $i++) {
    $multiply = $number * $i;
    echo "$number * $i = $multiply" . PHP_EOL;
}
?>