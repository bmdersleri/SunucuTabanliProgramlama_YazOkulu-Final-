<?php
//Bu dosyada admin girişi yapılmış mı kontrolü yapılmaktadır. Eğer giriş yapılmamışsa giriş sayfasına yönlendirir.
ob_start();
session_start();
if (!isset($_SESSION["admin_giris"])) 

{
	header('location:giris.php');
}
?>