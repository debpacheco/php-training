<?php
    $names = array('Miles', 'Jason', 'Deb');
    $names2 = ["Miles2", "Jason2", "Deb2"];

    echo "<pre>";
    print_r($names2);
    echo "</pre>";
    

    // echo $names[0];
    // echo $names2[2];

    foreach ($names as $name) {
        echo "<p>Hi " . $name . "</p>";
    }

    //Associated Multi-Dimensonal Array
    $movies = [ 
        'findingnemo' => [
            'Title' => 'Finding Nemo', 
            'Type' => 'DVD',
            'Price' => 30
        ],
        'diehard' => [
            'Title' => 'Die Hard!',
            'Type' => 'BluRay',
            'Price' => 10
        ]
    ];

 echo "<pre>";
 print_r($movies);
 echo "</pre>";

 echo $movies['findingnemo']['Title'];
 
 echo $movies['diehard']['Title'];

 foreach($movies as $movie) {
     echo '<p>' . $movie['Title'] . '</p>';
     echo '<p>' . $movie['Type'] . '</p>';
     echo '<p>' . $movie['Price'] . '</p>';
 }

 foreach( $movies as $movie) {
     foreach( $movie as $key=>$item ); {
         echo '<p>' . $key . ': ' . $item . '</p>';
        }
 }