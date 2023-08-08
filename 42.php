<?php
//In a company, worker efficiency is determined on the basis of the time required for a worker to complete a particular job. If the time taken by the worker is between 2 – 3 hours, then the worker is said to be highly efficient. If the time required by
//the worker is between 3 – 4 hours, then the worker is ordered to improve speed. If the time taken is between 4 – 5 hours, the
//worker is given training to improve his speed, and if the time taken by the worker is more than 5 hours, then the worker has to leave the company. If the time taken by the worker is input through the keyboard, find the efficiency of the worker.


$hour = readline('Enter hour: ');

if ($hour >= 2 && $hour <= 3) {
    echo "The worker is highly efficient";
} elseif ($hour >= 3 && $hour <= 4) {
    echo "The worker is orderd to improve speed";
} elseif ($hour >= 4 && $hour <= 5) {
    echo "The worker is given trainig to improve his speed";
} elseif ($hour > 5) {
    echo "The worker has to leave the company";
}
?>