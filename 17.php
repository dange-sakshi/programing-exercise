<?php
//If a five-digit number is input through the keyboard, write a program to calculate the sum of its digits. (Hint: Use the modulus operator ‘%’)
   $num = readline('Enters number: ');
   $sum = 0;
   while($num != 0){
    $sum += $num % 10;
    $num = $num /10;
   }
echo $sum;

//$num = 34589
//$sum = 0;
//34589 != 0
//$sum += 34589 %10 = 9
//$num = 34589 / 10 = 3458

// 3458 != 0
//$sum += 3458 %10 = 17
//$num = 34589 / 10 = 345
//
// 345 != 0
//$sum += 3458 %10 = 22
//$num = 34589 / 10 = 34
//
// 34 != 0
//$sum += 34 %10 = 26
//$num = 34589 / 10 = 3
//
// 3 != 0
//$sum += 3 %10 = 29
//$num = 3/ 10 = 0
//
// 0 != 0 false
//echo $sum;
?>