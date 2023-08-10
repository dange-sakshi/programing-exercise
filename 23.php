<?php
//If a five-digit number is input through the keyboard, write a program to print a new number by adding one to each of its digits. For example if the number that is input is 12391 then the output should be displayed as 23402.


$num = readline('Enter five digit number: ');

$n = $num;
$sum = 0;
$reverce = 0;
for ($i = 5; $i >= 1; $i--) {
  $reverce = $num % 10;
  $set = $reverce + 1;
  if ($set == 10) {
    $set = 0;
  }
  if ($i == 5) {
    $sum +=  $set;
  } elseif ($i == 4) {
    $sum +=  $set * 10;
  } elseif ($i == 3) {
    $sum +=  $set * 100;
  } elseif ($i == 2) {
    $sum +=  $set * 1000;
  } elseif ($i == 1) {
    $sum +=  $set * 10000;
  }
  $num = $num / 10;
}
echo $sum;
?>