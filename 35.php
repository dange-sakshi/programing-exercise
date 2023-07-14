<?php

//Any year is entered through the keyboard, write a program to determine whether the year is leap or not. Use the logical operators && and ||.

$year = readline('Enter year: ');

if (($year % 400 == 0 || $year % 4 == 0) && $year % 100 != 0) {
    echo "It is a leap year";
} else {
    echo "It is not a leap year";
}
?>