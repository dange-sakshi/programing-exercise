<?php
//Write a program that prints this emoji: “😀” for every odd number, and the “😔” for every even number up to 100.
$emoji = readline('Enter Number : ');

for($i=1; $i <= $emoji; $i++){
    if($i % 2 == 0){
        echo "😔" . "\n";
       
    }else{
        echo "😀";
    }
}



?>