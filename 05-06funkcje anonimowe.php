<?php
$imiona = array ('Ola', 'Jan', 'Renata', 'Mirek');
usort ($imiona, function ($a, $b){
    return $a[1] <=>$b[1];
});
?>

<pre>
    <?php print_r ($imiona); ?>
</pre>