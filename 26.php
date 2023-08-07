<?php
//According to the Gregorian calendar, it was Monday on the date 01/01/1900. If any year is input through 
//the keyboard write a program to find out what is the day on 1st January of this year.

$given_year = 1900;
$year = readline('Enter year: ');

$diff = $year - $given_year;
$leap_year = $diff / 4;

$remining_year = $diff - $leap_year;
$total = ($remining_year * 365) + ($leap_year * 366);
$days = $total % 7;

if ($days == 0) {
    echo "Monday";
} elseif ($days == 1) {
    echo "Tuesday";
} elseif ($days == 2) {
    echo "wednesday";
} elseif ($days == 3) {
    echo "thursday";
} elseif ($days == 4) {
    echo "friday";
} elseif ($days == 5) {
    echo "saturday";
} elseif ($days == 6) {
    echo "sunday";
}
?>