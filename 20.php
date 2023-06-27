<?php
//In a town, the percentage of men is 52. 
//The percentage of total literacy is 48.
 //If the total percentage of literate men is 35 of the total population, 
 //write a program to find the total number of illiterate men and women if the population of the town is 80,000.


$pop = 80000;
$tman = 52 / 100 * $pop;
$w_m_l = 48/ 100 *$pop;
$l_man = 35/100* $pop;
$im= $tman - $l_man;
$twomen = $pop - $tman;
$l_women = $w_m_l-$l_man;
$i_women = $twomen - $l_women;
$i_m_w = $im + $i_women;
echo $i_m_w;


?>