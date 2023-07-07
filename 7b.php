<?php
//Given a positive integer with an arbitrary number of digits, write a program to determine whether it is an Armstrong number. 
$num = readline('Enter number: ');
$qu = $num;
$qu1 = $num;
$sum = 0;
$count =  0;
while ((int) $qu > 0) {
    $r = (int)$qu % 10;
    $count++;
    $qu = (int)$qu / 10;
}
$count1 = $count;


while ($num != 0) {

    $rem = (int)$num % 10;

    $mult = 1;
    for ($i = 1; $i <= $count; $i++) {
        $mult *= $rem;
    }

    $sum += $mult;

    $num = $num / 10;
    // echo $sum;
}

if ($sum == $qu1) {
    echo "$qu1 is an  Armstrong number";
} else {
    echo "$qu1 is not an  Armstrong number";
}
?>