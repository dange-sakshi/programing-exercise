<?php
//Write a program to print the sum of armstrong numbers up to the number entered by the user.


$num = readline('Enter number: ');
$total = 0;  
for ($i = 1; $i <= $num; $i++) {
    $sum = 0;
    $qu = $i;
    $count = strlen(strval($qu));
    while ( $qu != 0) {
         $remainder = (int)$qu % 10;
         $mult = 1;
            for($k=1; $k <= $count; $k++){
                $mult *= $remainder; 
            }
         
                $sum += $mult;
                $qu = $qu / 10;
        
    }
    if ($sum == $i) {
        echo "$i is armstrong number" . PHP_EOL;
        $total += $i;
    }
}

echo $total;




?>
