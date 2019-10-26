<!-- CHALLENGE ONE -->
<?php 
    $faveppls = ['Jonathan', 'My mom', 'Lil bro', 'the littles'];
foreach ( $faveppls as $faveppl ) {
    echo "<p> I love $faveppl</p>";
}


    // $bankdeposits = ['400.00', '200.00', '600.00' ];
    // $bankwithdrawals = ['300.00', '500.00', '100.00'];

//CHALLENGE NUMBER 1
//     $bankdeposits = [
//         '400' => [
//             'Deposit' => '400.00',
//         ],
//         '200' => [
//             'Deposit' => '200.00',
//         ], 
//         '600' => [
//             'Deposit' => '600.00',
//         ],
//         '300' => [
//             'Withdraw' => '300.00',
//         ],
//         '500' => [
//             'Withdraw' => '500.00',
//         ],
//         '100' => [
//             'Withdraw' => '100.00'
//         ]
// ];
$transactions = [
    -100, -40, 30, 40, 78
];

//TO DO TOTAL SUM OF ALL TRANSACTIONS
$total = 0;
foreach( $transactions as $transaction ) {
    echo $transaction;
    if ($transaction >= 0) {
        echo "<p>Deposited $transaction</p>";
    } else {
        echo "<p>Withdrew $transaction</p>";
    }
    $total = $total + $transaction;
}
//add tax to it
$tax = number_format($total * 0.30, 2);
$total = number_format($total, 2);
$afterTax = number_format($total - $tax, 2);

echo "<p>Total $total </p>";
echo "<p>Tax $tax </p>";
echo "<P>After Tax $afterTax </p>";

// echo '<pre>';
// print_r($bankdeposits);
// echo '</pre>';

// foreach( $bankdeposits as $bankdeposit) {
//     foreach( $bankdeposit as $key=>$item ); {
//         echo '<p>' . $key . ': ' . $item . '</p>';
//        }
// }

// $total = array_sum($bankdeposit);
// echo $total;

//CHALLENGE NUMBER 3
$posts = [
    [
        'Title' => 'The Title',
        'Content' => 'The Content',
        'Author' => 'Deb',
        'Image' => 'https://cravinghomecooked.com/wp-content/uploads/2019/05/one-pot-creamy-parmesan-pasta-1-9.jpg'

    ]
    ];

    function the_title($pre = null, $close = null) {
        global $post;
        if ($pre == null) $pre = '<h1>';
        if ($close == null) $close = '</h1>';
        echo $pre . $post['Title'] . $close;
    }
    
    function the_content() {
        global $post;
        echo '<p>'. $post['Content'] . '</p>';
    }
    
    function the_author() {
        global $post;
        echo '<p>' . $post['Author'] . '</p>';

    }
 
    foreach ( $posts as $post) {
        //echo $post['Title'];
        the_title("<h2>, </h2>");
        the_content();
        the_author();
        // echo $post['Content'];
        // echo "<img src='" . $post['Image'] . "' />";
        // echo $post['Author'];
    }

    //CHALLENGE NUMBER 5
