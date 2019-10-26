<?php
    function getTaxes ($amount) {
        $rate = 0.0725;

        return number_format ($rate * $amount, 2);
    }

    function getShipping ( $amount ) {
        if ( $amount <= 15) {
            $shipping = 7;
        } else {
            $shipping = 0;
        }

        return number_format($shipping, 2);
    } 
    $cart = [
        'pasta' => [
            'Title' => 'Pasta',
            'Price' => 5.99
        ], 
        'steak' => [
            'Title' => 'Steak',
            'Price' => 15.99
        ],
        'fancy wine' => [
            'Title' => 'Fancy Wine',
            'Price' => 49.99
        ]
];

$total = 0;
$totalShipping = 0;
foreach ($cart as $product) {
      echo '<p>' . $product['Title'] . ' costs ' .$product['Price'] .  '</p>';
      echo "Product shipping costs $" . getShipping($product['Price']) . "</p>";
      
      $total = $total + $product['Price'];

      

      $totalShipping = $totalShipping + getShipping($product['Price']);
      
    }

echo '<p> $' . $total . '</p>';
echo '<p>Taxes $' . getTaxes($total) . '</p>';
echo '<p>Shipping $' . $totalShipping . '</p>';
echo '<p>Total Amount $' . ( $total + $totalShipping + getTaxes($total) ) . '</p>';
// echo '<p> Taxes $' . number_format(($total * 0.725), 2) . '</p>';

// $i = 1; 
// $total = 0;
// foreach ( $cart as $cartList ) {
//     echo "<p> In frame " . $i . " I scored " . $cartList . "</p>";
    
//     if( $cartList % 2 == 0) {
//         echo "This score is even";
//     } else {
//         echo "This score is odd";
//     }

//     $total = $total + $frameScore;

//     echo "Your Current Score" . $total;
//     $i++;
// }
// echo "Your Score is " . $total;