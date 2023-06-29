<?php
//If cost price and selling price of an item is input through the keyboard, write a program to determine whether the seller has made profit or incurred loss. Also determine how much profit he made or loss he incurred.


$cost = readline('Enter Cost Price: ');
$sell = readline('Enter Sell Price: ');

$pro = $sell - $cost;
$loss = $cost - $sell;



if($pro > $loss){
    echo "Seller is in profit" . PHP_EOL;
    echo "$pro profit" . PHP_EOL;
}else{
    echo "Seller is in loss" . PHP_EOL;
    echo "$loss loss". PHP_EOL;
}



?>