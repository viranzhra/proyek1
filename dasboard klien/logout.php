<?php

session_start();
session_destroy();
$email = "user";
header ("location: ../../proyek1/user/landingpage.php");

?>