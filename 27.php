<?php
$num = readline('Enter five digit number: ');
$n = $num;
$reverce = 0;
for ($i = 5; $i >= 1; $i--) {
    $reverce = $reverce * 10;
    $reverce = $num % 10 + $reverce;
    $num = $num / 10;
}
if ($n == $reverce) {
    echo "$n is equal to the $reverce";
} else {
    echo "$n is not equal to the $reverce";
}
?>  