<?php

$servername = "localhost";
$usernameDB = "root";
$passwordDB = "";
$dbname = "manajemen";
$conn = mysqli_connect($servername, $usernameDB, $passwordDB, $dbname);
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
?>