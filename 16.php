<?php
$c = readline('Enter the value of c: ');
$d = readline('Enter the value of d: ');

$sum = $c + $d;
$d = $sum - $d;
$c = $sum - $c;

echo "The value of c $c" . PHP_EOL;
echo "The value of d $d" . PHP_EOL;
?>