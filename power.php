<?php
//Two numbers are entered through the keyboard. Write a program to find the value of one number raised to the power of another.


$num = 5.5;
$power = 3;
$result = 1;
for($i=$power; $i>0; $i--){
    $result = $result * $num;
}
echo $result;

//$num = 5;
//$power = 3;
//i=3
//3 > 0 yes
//$result = 1 * 5 = 5
//i = 2
//2 > 0 yes
//$result = 5 * 5 =25
//i = 1
//1 > 0
//$result = 25 * 5 =125


//$num=4;
//$power=2;
//i = 2
//2 > 0
//$result = 1 * 4 = 4
//i = 1
//1 > 0
//$result = 4 *4 =16
?>