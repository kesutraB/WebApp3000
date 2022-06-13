<?php
$DBserver = "localhost";
$DBuser = "root";
$DBpassword = "";
$DBname = "i2c_zwa";

$db = mysqli_connect($DBserver, $DBuser, $DBpassword, $DBname);
mysqli_set_charset($db, "utf8");

?>