<!-- Challenge one -->
<?php 
    $bowlingFrames = [
        2, 7, 4, 5, 2, 4, 9, 8, 1, 2
    ];
    
    //ONE WAY TO DO IT CHALLENGE ONE
    $i = 1;
    $total = 0;
    foreach ( $bowlingFrames as $frameScore ) {
        echo "<p> In frame " . $i . " I scored " . $frameScore . "</p>";
        
        if( $frameScore % 2 == 0) {
            echo "This score is even";
        } else {
            echo "This score is odd";
        }

        $total = $total + $frameScore;

        echo "Your Current Score" . $total;
        $i++;
    }
    echo "Your Score is " . $total;

    //DIFFERENT WAY TO DO IT CHALLENGE MILES ENCOURAGES TO USE THIS WAY
//   foreach ($bowlingFrames as $index=>$frameScore) {
//       $frame = $index + 1;
//       echo "<p> In frame " . $frame . " I scored " . $frameScore . "</p>";
//   }


  //CHALLENGE TWO

