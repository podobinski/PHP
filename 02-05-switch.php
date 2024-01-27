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