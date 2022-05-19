<?php

//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "portfolio";

$servername = "bi0yof0wtjjaufawh5gh-mysql.services.clever-cloud.com";
$username = "ufojxqz89ew3pkjm";
$password = "jQu5M0TKaJPtpcwcRGDI";
$dbname = "bi0yof0wtjjaufawh5gh";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// current date
$date = date('Y-m-d H:i:s', time());

//arabic lang chars
mysqli_set_charset($conn, 'utf8');

$ProjTitle = "Aissa Gue";