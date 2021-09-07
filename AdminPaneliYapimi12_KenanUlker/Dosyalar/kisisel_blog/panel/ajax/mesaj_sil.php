<?php

//Bu sayfada veri tabanında gelen idye göre silme işlemi yapılmaktadır.
try {

	include '../inc/ayar.php';
	$id = $_GET['id'];
	$sonuc = $conn->exec("DELETE FROM mesajlar WHERE mesaj_id = '$id'");

	if ($sonuc > 0) {
		header("location:../index.php?durum=basarili");
	} else {
		header("location:../index.php?durum=basarisiz");

	}

} catch (PDOException $e) {
	die($e->getMessage());
}

$conn = null;

?>