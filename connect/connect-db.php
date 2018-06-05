<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db_name = "final_1531";

$conn = mysqli_connect($host, $user, $pass, $db_name) or die("Couldn't connect to MySQL!");
mysqli_select_db($conn, $db_name) or die("Couldn't find the database!");
?>