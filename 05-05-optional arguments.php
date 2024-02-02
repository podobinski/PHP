<?php
function matma($a, $b=5, $operacja='dodawanie') {
    if ('dodawanie' == $operacja) {
        $result = $a + $b;
    } 
    else if ('odejmowanie'==$operacja) {
        $result = $a-$b;

    }
    else {
        $result = $a / $b;
    }
    return number_format($result, 50, ',', ' ');
}

echo matma(3, operacja: 'odejmowanie');
