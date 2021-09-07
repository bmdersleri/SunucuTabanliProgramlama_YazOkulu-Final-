<?php

//Bu sayfada veri tabanında gelen idye göre silme işlemi yapılmaktadır.

try {

	include '../inc/ayar.php';
	$id = $_GET['id'];


	$data = $conn->query("SELECT * FROM galeri WHERE id = '$id' ")->fetch(PDO::FETCH_ASSOC);
	unlink('../../'.$data['img']);
	
	
	$sonuc = $conn->exec("DELETE FROM galeri WHERE id = '$id'");

	if ($sonuc > 0) {
		header("location:../galeri-ayar.php?durum=basarili");
	} else {
		header("location:../galeri-ayar.php?durum=basarisiz");

	}

} catch (PDOException $e) {
	die($e->getMessage());
}

$conn = null;

?>