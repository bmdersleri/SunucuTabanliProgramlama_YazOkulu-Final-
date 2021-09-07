<?php

$host = 'eu-cdbr-west-01.cleardb.com';
$user = 'b29035683a8053';
$pass = '4f0465a7';
$db_name = 'heroku_8dabd51d394d90a';

$conn = new MySQLi($host, $user, $pass, $db_name);
$conn->set_charset("utf8");

if ($conn->connect_error) {
  die('Database baglanti hatasi.. ' . $conn->connect_error);
}
