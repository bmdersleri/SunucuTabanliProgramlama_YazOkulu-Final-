<?php

ob_start();

try {
  $db = new PDO("mysql:host=localhost:3306; dbname=emineorhan;charset=utf8", "root","");
} catch (PDOException $e) {
  print  $e-> getMessage();
}


 ?>
