<?php
//If a five-digit number is input through the keyboard, write a program to reverse the number.

  
$num = readline('Enter number: ');

for($i=5; $i >= 1; $i--){
    $rev = $num % 10;
     echo $rev;
    $num = $num / 10;
}


//$num = 12345
// $i= 5
//5 >= 1 
//$rev = 12345 % 10
//     = 5
//$num = 12345 / 10
//       =1234
//$num = 1234
// $i= 4
//4 >= 1 
//$rev = 1234 % 10
//     = 4
//$num = 12345 / 10
//       =123
//$num = 123
// $i= 3
//3 >= 1 
//$rev = 123 % 10
//     = 3
//$num = 123 / 10
//       =12
//$num = 12
// $i= 2
//2 >= 1 
//$rev = 12 % 10
//     = 2
//$num = 12 / 10
//       =1
//$num = 1
// $i= 1
//1 >= 1 
//$rev = 1 % 10
//     = 1
//$num = 1 / 10
//       =0
//$num = 0
// $i= 0
//0 >= 1  false

?>