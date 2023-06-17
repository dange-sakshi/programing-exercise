<?php
//Write a program to print the largest of 5 numbers entered by the user.

$large = 0;
$count = 5;
for($i = 1; $i<= $count; $i++){
    $num = readline('Enter number: ');
    if($num > $large){
        $large = $num;
    }
    
}
echo "$large is a  largest number";

//$i = 1
//1 <= $count true
//$num = 1
//1 > 0 true
//$large = 1
//$i = 2
//2 <= $count true
//$num = 2
//2 > 1 true
//$large = 2
//$i = 3
//3 <= $count true
//$num = 3
//3 > 2 true
//$large = 3
//$i = 4
//4 <= $count true
//$num = 4
//4 > 3 
//$large = 4
//$i = 5
// 5 <= $count true
// $num = 5
//5 > 4
//$large = 5
// $i = 6
//6 <= 5 false
//echo $large= 5

?>