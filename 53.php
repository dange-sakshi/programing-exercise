<?PHP
//Write a program to produce the following output:

$alpha = range('A', 'Z');
$n = 6;
for ($i = 0; $i <= $n; $i++) {
    for ($j = 0; $j <= $n - $i; $j++) {
        echo $alpha[$j];
        echo " ";
    }
    for ($k = 0; $k < $i; $k++) {
        if ($k == 0) {
            echo "  ";
        } else {
            echo "    ";
        }
    }
    for ($l = $n - $i; $l >= 0; $l--) {
        if ($l == 6) {
            continue;
        } else {
            echo $alpha[$l];
            echo " ";
        }
    }
    echo PHP_EOL;
}
?>