<?php

    //http://192.168.33.10/array-challenges6.php?username=Test&plan=pro

    $userID = $_GET['userID'];
    $username = $_GET['username'];

    $users = [
        [
            'Username' => 'Debbie',
            'Email' => 'pachecodeb@yahoo.com',
            'Phone' => '5597098913',
            'Plan' => 'Super Pro'
        ],
        [
            'Username' => 'Isaiah',
            'Email' => 'thewizard@hehheh.com',
            'Phone' => '5599999999',
            'Plan' => 'Hecka Basic'
        ],
        [
            'Username' => 'Tony',
            'Email' => 'tonythetech@grrrreat.com',
            'Phone' => '5595591234',
            'Plan' => 'Hecka Basic'
        ],
    ];

    foreach ( $users as $user ) {
        foreach ( $user as $key=>$item) {
            echo '<p>' . $key . ': ' . $item . '</p>';
        }
    }

    foreach ($users as $user) {
        if ( $username == $user['Username']) {
            echo "<p>Hello " . $username . "Your Plan is " . $user['Plan'] . "</p>"; 
        }
    }

    $currentUser = $users[$userID];
    echo "<p>Hello " . $currentUser['Username'] . "Your Plan is " . $currentUser['Plan'] . "</p>"; 
    echo "<p>Hello " .  $users[$userID]['Username'] . "Your Plan is " .  $users[$userID]['Plan'] . "</p>"; 

    foreach( $users as $user ) {
        if ( $user['Plan'] == 'pro' ) {
           echo '<p>' . $user['Email'] . ' has Pro Plan</p>';
        } else {
            echo '<p>' . $user['Phone'] . ' has Basic Plan</p>';
        }
    }
   //echo $users[$userID]['Username'];