<?php
$min = 1; 
$max = 50;
$guess = 42; //Change this value to test!
$num = rand($min-10, $max+10); // Change this value to test!

// If you really want to go nuts, try this:
//$num = rand($min, $max);

$outcome = '';

$outcome = match(true) {
    $guess < $min => "Wybrana wartość $guess ponizej minimalnej wartosci $min",
    ($guess >=$min) && ($guess < $num) => "Wybrana wartość $guess jest za mala",
    $guess === $num => "Wybrana wartość $guess jest za prawidlowa",
    ($guess > $num) && ($guess <= $max) => "Wybrana wartość $guess jest za duza",
    $guess > $max => "Wybrana wartość $guess  powyzej maksymalnej wartosci $min",
};

echo $outcome;
echo "<br>num is $num";