<?php
//A library charges a fine for every book returned late. For first 5 days the fine is 50 paise, for 6-10 days fine is one rupee and above 10 days fine is 5 rupees. If you return the book after 30 days your membership will be canceled. Write a program to accept the number of days the member is late to return the book and display the fine or the appropriate message.
$day = readline('Enter days: ');

if ($day >= 1 && $day <= 5) {
    echo "The fine is 50 paise";
} elseif ($day >= 6 && $day <= 10) {
    echo "The fine is 1 rupees";
} elseif ($day > 10 && $day < 30) {
    echo "The fine is 5 rupees";
} elseif ($day > 30) {
    echo "Your membership will be canceled";
}
?>