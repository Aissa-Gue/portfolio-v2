<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "portfolio";

//$servername = "sql303.epizy.com";
//$username = "epiz_29025327";
//$password = "XaeTiDLiCPhpGA";
//$dbname = "epiz_29025327_portfolio";

$servername = "sql11.freemysqlhosting.net";
$username = "sql11466518";
$password = "Vx5DSahGNZ";
$dbname = "sql11466518";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// current date
$date = date('Y-m-d H:i:s', time());

//arabic lang chars
mysqli_set_charset($conn, 'utf8');

$ProjTitle = "Aissa Gue";
