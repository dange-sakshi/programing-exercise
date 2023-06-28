<?php
//If the total selling price of 15 items and the total profit earned on them is input through the keyboard, write a program to find the cost price of one item.

$ts = readline('Enter Selling Price: ');
$pro = readline('Enter Profit: ');

$cost = ($ts - $pro)/15;
$ceil = (ceil($cost));
echo $ceil;
?>