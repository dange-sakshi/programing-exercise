<?php
//Write a program to print the smallest of 5 numbers entered by the user.

$small = 0;
$count = 5;
for ($i = 1; $i <= $count; $i++) {
    $num = readline('Enter number: ');
    if($i == 1){
        $small = $num;
    }
       if ($num < $small) {
        $small = $num;
      }
}
echo $small;

//$i = 1
//1 <= 5
//$num = 13
//1 == 1  yes
//$small = 13
//13 < 13
//$small = 13
//$i = 2
//2 <= 5
//$num = 59
//59 < 13
//$small = 13
//$i = 3
//3 <= 5
//$num = 27
//27 < 13
//$small = 13
//$i = 4
//4 <= 5
//$num = 12
//13 < 13
//$small = 12
//$i = 5
//5 <= 5
//$num = 3
//3 < 12
//$small = 3
//$i = 6
//6 <= 5 false
?>