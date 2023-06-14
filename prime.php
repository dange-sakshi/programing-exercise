<?php
//Write a program to determine whether a number is prime or not. A prime number is one, which is divisible only by 1 or itself.


$number = readline('Enter Number : ');  
$count=0;  
if($number  < 0){
    
   echo "negative numbers are not allowed";
}else{
for ( $i=1; $i <= $number; $i++)  
{  
if (($number %  $i)==0)  
{  
$count++;  
}  
}  
if ($count < 3)  
{  
echo "$number is a prime number.";  
}
else
{
echo "$number is not a prime number."; 
}
}

//$number = 4 , 3, 9
//i = 1 
//1<=4
//4 % 1 == 0
//$count = 1
//i = 2
//2<=4
//4%2==0
//$count = 2
//i=3
//3<=4
//4%3==0 -No
//i=4
//4<=4
//$%4==0
//count =3
//3<3  no
//4 is not a prime number.
//same process for 3 and 9.
//3 is a prime number.
//9 is not a prime number.

?>


