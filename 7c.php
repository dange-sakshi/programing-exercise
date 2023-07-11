<?php
//Write a program to print the sum of armstrong numbers up to the number entered by the user.


$num = readline('Enter number: ');
$total = 0;
for ($i = 1; $i <= $num; $i++) {
    $sum = 0;
    $qu = $i;
    $qu1 = $i;
    $count =  0;
    while ((int) $qu > 0) {
        $r = (int)$qu % 10;
        $count++;
        $qu = (int)$qu / 10;
    }
    $count1 = $count;
    // $count = strlen(strval($qu));
    while ($qu1 != 0) {
        $remainder = (int)$qu1 % 10;
        $mult = 1;
        for ($k = 1; $k <= $count1; $k++) {
            $mult *= $remainder;
        }

        $sum += $mult;
        $qu1 = $qu1 / 10;
    }
    if ($sum == $i) {
        // echo "$i is armstrong number" . PHP_EOL;
        $total += $i;
    }
}

echo $total;
?>