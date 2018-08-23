<?php

$servername = "localhost";
$username = "root";
$password = "";

$con=mysqli_connect($servername,$username,$password,"assignment") or die("No Connection") ;

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

 
?>