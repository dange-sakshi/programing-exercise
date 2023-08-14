<?php

//Using conditional operators determine:
//(1) Whether the character entered through the keyboard is a lower case alphabet or not.
//(2) Whether a character entered through the keyboard is a special symbol or not.


$chr1 = readline('Enter charecter: ');
$ascii = ord($chr1);
if ($ascii >= 97 && $ascii <= 122) {
    echo "$chr1 is lower case alphabet" . PHP_EOL;
} else {
    echo "$chr1 is not lower case alphabet" . PHP_EOL;
}
if (($ascii >= 0 && $ascii <= 47) || ($ascii >= 58 && $ascii <= 64) || ($ascii >= 91 && $ascii <= 96) || ($ascii >= 123 && $ascii <= 255)) {
    echo "$chr1 is special symbol" . PHP_EOL;
} else {
    echo "$chr1 is not special symbol" . PHP_EOL;
}
?>