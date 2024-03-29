<?php
session_start();
require_once("connect.php");
require_once("functions-new.php");
$loggedIn = $_SESSION['loggedin'];
/* this pulls the text from the after the first/in the url 
and set it to an array
*/
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));

//this pulls the last item out of the uri array and set $thisPagename variable to that item
$thisPagename = array_pop($uriSegments);

//this sets the pagename if none is provided in the url
if ($thisPagename =="") {
  $thisPagename = "index";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php // makeTitle($conn, $thisPagename); ?> </title>
</head>
<body>
  <nav>
    <?php
    makeNav($conn, $loggedIn);
    echo "<p>" . $loggedIn . "</p>";
    ?>
  </nav>
  <section>
    <div>
        <?php 
        //echo $thisPagename;
        makeContent($conn, $thisPagename);
        ?>
    </div>
  </section>
</body>
</html>

