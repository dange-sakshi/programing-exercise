<?php
//If the marks obtained by a student in five different subjects are input through the keyboard, find out the aggregate marks and  percentage marks  obtained by the student. Assume that the maximum marks that can be obtained by a student in each subject is 100.


$aggr = 0;
for($i = 0; $i < 5; $i++){
    $mark = readline('Enter mark: ');
    if($mark <= 100){
        $aggr += $mark;
    }else{
        echo "$mark is greater than the 100";
    }
}
$percentage = ($aggr/500) * 100;
echo "$aggr Aggregrate marks" . PHP_EOL;
echo "$percentage% Percentage " . PHP_EOL;


//$aggr = 0;
//$i=0
//0 < 5
//$mark = 35
//35 <= 100
//0 += 35
//$i = 1
//1 < 5
//$mark = 45
//45 <= 100
//35 += 45 =80
//$i = 2
//2 < 5
//$marks = 65
//80 += 65 = 145
//$i = 3
//3 < 5
//$mark = 55
//145 += 55 = 200
//$i = 4
//4 < 5
//$mark= 75
//200 += 75 =275
//$per = (275 / 500)*100
//echo $aggr = 275
//echo $per  = 55%


?>