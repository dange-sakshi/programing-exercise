<?php

$a = 1700; 
//$a = 2000, 1600, 2024, 2021

if ($a % 400 == 0){
        echo("It is a leap year");
} else if ($a % 100 == 0){
        echo("It is not a leap year");
}else if ($a % 4 == 0){
        echo("It is a leap year");
} else{
        echo("It is not a leap year");
}

//1700 - it is not a leap year. - cond-2
//2000 - it is a leap year.     - cond-1
//1600 - it is a leap year.     - cond-1
//2024 - it is a leap year.     - cond-3
//2021 - it is not a leap year. - cond-4

?>