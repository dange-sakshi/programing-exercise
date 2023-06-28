<?php
//A cashier has currency notes of denominations 10, 50 and 100.
// If the amount to be withdrawn is input through the keyboard in hundreds, 
//find the total number of currency notes of each denomination the cashier will have to give to the withdrawer.


$rs = readline('Enter Rs: ');
$note100 = $rs / 100;
$rs = $rs % 100;
$note50 = $rs / 50;
$rs = $rs % 50;
$note10 = $rs / 10;
$rs = $rs % 10;

echo (int) $note100 . PHP_EOL;
echo (int) $note50 . PHP_EOL;
echo (int) $note10 . PHP_EOL;

?>