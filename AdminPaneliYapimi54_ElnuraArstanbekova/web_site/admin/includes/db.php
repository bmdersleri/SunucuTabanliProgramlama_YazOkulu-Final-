<?php
$db_host = "localhost";
$db_user = "root";
$dn_password = "";
$db_database = "blog";
$conn = mysqli_connect($db_host,$db_user,$dn_password,$db_database);
$conn->set_charset("utf8");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
?>