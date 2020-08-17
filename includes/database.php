<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "cms";
// Establish Connection with Database
$connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);


if($connection) {
   session_start();
}


?>