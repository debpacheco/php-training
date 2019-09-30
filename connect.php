<?php
$servername="localhost";
$username = "root";
$password = "secret";

//create connection
$conn = new mysqli($servername,$username,$password);

//check connection fam, that arrow -> says inside of conn object
if ($conn->connect_error) {
  die("No worky " . $conn->connect_error);
} else {
  $success = "It worked!";
}

$thisPagename = $_GET["page"] ?? "Home";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>