<?php
//Write a program that prints this emoji: “😀” for every odd number, and the “😔” for every even number up to 100.

for($i=1; $i <= 100; $i++){
    if($i % 2 == 0){
        echo "😔" . "<br>";
       
    }else{
        echo "😀";
    }
}



?>