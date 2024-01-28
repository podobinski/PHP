<?php 
$total = 10;
switch ($total) {

    case 1:
        echo '$total is 1';
        break;
    case 2:

        echo '$total is 2';
        break;
    default:
    echo '$total si more than 2';
}
echo '<br>';
$turtle = 'Leo';
$bandana= "";
switch ($turtle) {

    case 'Leo':
        $bandana = 'blue';
        break;
    case "Raph":
        $bandana = 'green';
        break;
    default:
        $bandana = 'black';
}

echo '<strong> $bandana </strong>';
echo '<br>';
$x = 0;

function add_to_x($x){
    return $x + 5;
}

$result = match($x) {
    -2, -1, 0 => add_to_x($x),

    1=> '$x is 1',
    2=> '$x is 2',
    default   => '$x is neither 1 nor 2',
};
echo $result;
echo '<br>';

$result = match(true) {
    $x <= 0 => '$x is not positive',
    $x == 1 => '$x is 1',
    default =>'co innego',
};

echo $result;

