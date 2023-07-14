<?php
//Given a point (x, y), write a program to find out if it lies on the x-axis, y-axis or at the origin, viz. (0, 0).

$x = readline('Enter point x: ');
$y = readline('Enter point y: ');

if ($x == 0 && $y == 0) {
    echo "point lies on origin";
} elseif ($x == 0) {
    echo "point lies on y axis";
} elseif ($y == 0) {
    echo "point lies on x axis";
} else {
    echo "point niether on x axis nor y axis";
}
?>