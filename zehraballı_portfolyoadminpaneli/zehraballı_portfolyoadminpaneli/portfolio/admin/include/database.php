<?php

ob_start();
session_start();

try {
  $db = new PDO("mysql:host=localhost;dbname=calismalarimsitesi;charset=utf8;","root","");
} catch (PDOException $e) {
  print $e->getMessage();
}

$ayarlar = $db->prepare("SELECT * FROM ayarlar WHERE id=:id");
$ayarlar->execute(["id" => 1]);

$ayar = $ayarlar->fetch(PDO::FETCH_OBJ);

 ?>
