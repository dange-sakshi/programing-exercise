<?php
//Write a program that prints this emoji: “😀” for every number divisible by 3, the “😔” emoji for every number divisible by 5, and the “😕” for every number divisible by both 3 and 5.
//Do this up to 200.
$emoji = readline('Enter Number : ');
for($i = 1; $i <= $emoji; $i++){
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "😕"."<br>";
    }elseif($i % 5 == 0){
        echo "😔" . "<br>";
    } elseif ($i % 3 == 0) {
        echo "😀" . "<br>";
    }else{
        echo "$i Number is not divisible by 3 and 5" . "<br>";
    }
}








?>