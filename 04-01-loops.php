<?php 
$z = 1;

do{
    echo "<p>$z</p>";
    $z++;

} while ($z < 10);

echo '<br>';

$y = 1;
for ($y = 1;$y<=10;$y+=2){
    echo "<p>$y</p>";
}

$kolory = array ('czerwony', 'bialy', 'amarantowy', 'czarny');

for ($i=0;$i < sizeof($kolory); $i++){
    echo '<p>'.$kolory[$i].'</p>';
}