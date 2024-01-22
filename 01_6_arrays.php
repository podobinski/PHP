<?php
    $kolory = array( 'bialy', 'czarny', 'czerwony');
    print_r ($kolory);
    echo '<br>';
    echo "$kolory[1]";
    $kolory[]= "fioletowy";
    print_r ($kolory);

    $miejscowosci = array(

        "Janek"  => "Krakow",
        "Wojtek" => "Warszawa",
    );
    print_r ($miejscowosci);