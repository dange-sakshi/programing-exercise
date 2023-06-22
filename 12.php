<?php
//
$km = readline('Enter km : ');

$meter = $km * 1000;
$ft = $km * 3280.84;
$inches = $km * 39370.1;
$cm = $km * 100000;

echo "$km km to $meter m" . PHP_EOL;
echo "$km km to $ft ft" . PHP_EOL;
echo "$km km to $inches inches " . PHP_EOL;
echo "$km km to $cm cm " . PHP_EOL;

?>