<?php
    $animals = array('Cats', 'Puppers', 'Sloth');

//FOREACH LOOP: Designed for Arrays
    foreach ($animals as $animal) {
        echo "<p>I love " . $animal . "</p>";
    }

    //FOR LOOP: Designed For Counting
    for ($i = 0; $i < count($animals); $i++ ) {
        echo '<p>I really LOVE ' . $animals[$i] . '</p>';
    }

    //WHILE LOOP: To see if it meets a condition
    $i = 0;
    while( $i < count($animals) ) {
        echo '<p>I REEALLY REALLY LOVE ' . $animals[$i] . '</p>';
    $i++;
}

//MULTIDIMENSIONAL ASSOCIATIVE ARRAY
$candies = [ 
    'almondjoy' => [
        'Name' => 'Almond Joy',
        'Price' => 2.00
    ],
    'snickers' => [
        'Name' => 'Snickers',
        'Price' => 1.25
    ]

];

foreach ( $candies as $candy ) {
    foreach ( $candy as $key=>$item) {
        echo $key . ' ' . $item;
    }
}
