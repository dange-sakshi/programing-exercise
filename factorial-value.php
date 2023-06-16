<?php
//Write a program to find the factorial value of any number entered through the keyboard.


$num = readline('enter number: ');
$fact =1;

for($i=$num; $i>=1; $i--){
    $fact = $fact * $i;
}
echo $fact;

//$num = 5
//5 >= 1 yes
//$fact = 1 * 5 =5
//i=4
//4 >= 1 yes
//$fact = 5 * 4=20
//i = 3
//$fact = 20 *3 = 60
//i = 2
//$fact = 60 * 2 = 120
//i =1
//$fact = 120 * 1= 120

?>