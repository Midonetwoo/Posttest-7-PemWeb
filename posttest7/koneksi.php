<?php

$host = "localhost:3308";
$user = "root";
$pass = "" ;
$db = "connectdatabase";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Gagal Terhubung".mysqli_connect_error());
}

?>