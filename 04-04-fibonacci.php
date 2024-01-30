<?php
$i=1;
$j=1;

while ($k<200) {
    $k=$i+$j;
    echo "$k<br>";

    $i= $j;
    $j = $k;
}

//chat gpt://

$fib1 = 0;
$fib2 = 1;

for ($i = 0; $i < 1000; $i++) { // Change 10 to the number of elements you want
    $fibSum = $fib1 + $fib2;
    echo $fibSum . "<br>";

    $fib1 = $fib2;
    $fib2 = $fibSum;
}
