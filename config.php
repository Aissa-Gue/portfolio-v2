<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "portfolio";

// $servername = "sql303.epizy.com";
// $username = "epiz_29025327";
// $password = "XaeTiDLiCPhpGA";
// $dbname = "epiz_29025327_portfolio";

$servername = "remotemysql.com";
$username = "rBiCTtBdYT";
$password = "JVzLRfoa95";
$dbname = "rBiCTtBdYT";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// current date
$date = date('Y-m-d H:i:s', time());

//arabic lang chars
mysqli_set_charset($conn, 'utf8');

$ProjTitle = "Aissa Gue";