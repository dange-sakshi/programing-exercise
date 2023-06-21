<?php
//Given a positive integer with an arbitrary number of digits, write a program to determine whether it is an Armstrong number. 
$num = readline('Enter number: ');
$qu = $num;
$count = strlen(strval($qu));
$sum = 0;

while($qu != 0){
   
    $rem = (int)$qu % 10;
    $mult = 1;
      for($i=1; $i <= $count; $i++){
        $mult *= $rem;
    }
    
          $sum += $mult;
          $qu = $qu / 10;
}
if($sum == $num){
    echo "$num is a  Armstrong number";
}else{
    echo "$num is not a  Armstrong number";
}



?>