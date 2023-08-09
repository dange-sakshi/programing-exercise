<?php

//Using conditional operators determine:
//(1) Whether the character entered through the keyboard is a lower case alphabet or not.
//(2) Whether a character entered through the keyboard is a special symbol or not.


$chr1 = readline('Enter charecter: ');
$ascii = ord($chr1);
if ($ascii >= 97 && $ascii <= 122) {
    echo "$chr1 is lower case alphabet" . PHP_EOL;
} else {
    echo "$chr1 is not lower case alphabet".PHP_EOL;
}
$chr2 = readline('Enter charecter: ');
$ascii1 = ord($chr2);
if ($ascii1 >= 0 && $ascii1 <= 47 || $ascii1 >= 58 && $ascii1 <= 64 || $ascii1 >= 91 && $ascii1 <= 96 || $ascii1 >= 123 && $ascii1 <= 255) {
    echo "$chr2 is special symbol";
} else {
    echo "$chr2 is not special symbol";
}
