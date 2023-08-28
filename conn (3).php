<?php

$host = "sql202.infinityfree.com"; // Change this to your MySQL server host
$username = "if0_34887962"; // Change this to your MySQL username
$password = "Eessg0tsK94Yc"; // Change this to your MySQL password
$database = "if0_34887962_patsu"; // Change this to your MySQL database name

$con = mysqli_connect($host, $username, $password, $database);

if (!$con) {
  die("Connection error: " . mysqli_connect_error());
}

?>
