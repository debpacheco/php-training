<?php
function makeContent ($conn){
    $sql = "SELECT pagename FROM test.content";
    $result = $conn->query($sql);
    while( $row = $result->fetch_assoc() ) {
      echo "<a href='index.php?page=" . $row['pagename'] . "'>" .$row['pagename']. "</a></li>";
    }
    echo "</ul>";

    } //end of makeNav function
    makeContent($conn);



?>