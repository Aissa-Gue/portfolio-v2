<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// current date
$date = date('Y-m-d H:i:s', time());

//arabic lang chars
mysqli_set_charset($conn, 'utf8');

$ProjTitle = "Aissa Gue";