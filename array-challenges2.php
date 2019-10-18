<!-- CHALLENGE ONE -->
<?php
    $favdrinks = ['Cherry 7up', 'Pina Jarritos', 'Fruit Punch Snapple', 'Boba'];
    foreach ($favdrinks as $favdrink) {
        echo '<p> I like drinking ' . $favdrink . '</p>';
    }
//CHALLENGE TWO
    $favfoods = [
        'fajitas' => [
            'Name' => 'Fajitas',
            'Sold at' => 'Mejias',
            'Price' => 8.99
        ],
        'pasta' => [
            'Name' => 'Pasta',
            'Sold at' => 'California Grill',
            'Price' => 5.99
        ], 
        'chickencordonbleu' => [
            'Name' => 'Chicken Cordon Bleu',
            'Sold at' => 'Gabrielas',
            'Price' => 11.99
        ],
        'pollo' => [
            'Name' => 'Pollos Delicioso',
            'Sold at' => 'Your moms house',
            'Price' => 7.99
        ]
];

echo '<pre>';
print_r($favfoods);
echo '</pre>';

//CHALLENGE THREE
foreach($favfoods as $favfood) {
    echo '<p>' . $favfood['Name'] . '</p>';
    echo '<p>' . $favfood['Price'] . '</p>';
    if ($favfood['Price'] >=5) { //this if statement is checking price, if greater than $5, print out free shipping
        echo "Free Shipping";
    }
    echo $favfood['Sold at'];
    echo '<p>' . $favfood['Sold at'] . '</p>';
}

foreach( $favfoods as $favfood) {
    foreach( $favfood as $key=>$item ); {
        echo '<p>' . $key . ': ' . $item . '</p>';
       }
}


// another way to do this same as above
// echo $food ['Name'];
// echo $food ['Price'];
// echo $food ['Location'];


//CHALLENGE FOUR

