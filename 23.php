<?php
//If a five-digit number is input through the keyboard, write a program to print a new number by adding one to each of its digits. For example if the number that is input is 12391 then the output should be displayed as 23402.


$num = readline('Enter five digit number: ');
$get = 0;
for ($i = 0; $i < 5; $i++) {
  $reverse = $num % 10;
  $set = $reverse + 1;
  if ($set == 10) {
    $set = 0;
  }
  $sum = pow(10, $i);
  $sw = $sum * $set;
  $get = $get + $sw;
  $num = $num / 10;
}
echo $get;
?>