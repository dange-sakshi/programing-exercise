<?php


//Write a program to print out all Armstrong numbers between 1 and 500. If the sum of cubes of each digit of the number is equal to the number itself, then the number is called an Armstrong number. For example, 153 = ( 1 * 1 * 1 ) + ( 5 * 5 * 5 ) + ( 3 * 3 * 3 )



for ($i = 1; $i <= 500; $i++) {
    $sum = 0;
    $qu = $i;
    while ($qu != 0
    ) {
        $remainder = (int)$qu % 10;
        $thrice = $remainder * $remainder * $remainder;
        $sum += $thrice;
        $qu = $qu / 10;
    }
    if ($sum == $i
    ) {
        echo "<p>$i is armstrong number</p>";
    }
}
?>