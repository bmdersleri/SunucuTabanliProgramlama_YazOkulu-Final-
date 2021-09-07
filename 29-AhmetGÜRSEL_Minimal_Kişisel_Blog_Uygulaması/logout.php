<?php
include("path.php");

session_start();

unset($_SESSION['id']);
unset($_SESSION['kullaniciAdi']);
unset($_SESSION['kullaniciRol']);
unset($_SESSION['message']);
unset($_SESSION['type']);

session_destroy();

header('location: ' . BASE_URL . '/index.php');
