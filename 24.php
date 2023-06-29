<?php
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