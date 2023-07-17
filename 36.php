<?php

//Any character is entered through the keyboard, write a program to determine whether the character entered is a capital letter, a small case letter, a digit or a special symbol. The following table shows the range of ASCII values for various characters.

$chr = readline('Enter character: ');
$ascii = ord($chr);
if ($ascii >= 65 && $ascii <= 90) {
    echo "$chr is a capital letter";
} elseif ($ascii >= 97 && $ascii <= 122) {
    echo "$chr is a small case letter";
} elseif ($ascii >= 48 && $ascii <= 57) {
    echo "$chr is a digit";
} elseif(($ascii >= 0 && $ascii <= 47 || $ascii >= 58 && $ascii <= 64 || $ascii >= 91 && $ascii <= 96 || $ascii >= 123 && $ascii <= 127)) {
    echo "$chr is a special symbol";
}
?>
