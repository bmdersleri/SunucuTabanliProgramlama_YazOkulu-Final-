<?php
//Bu sayfada veri tabanında gelen idye göre silme işlemi yapılmaktadır.
try {

	include '../ayar.php';
	$id = $_GET['id'];


	$sonuc = $conn->exec("DELETE FROM ziyaretci_defteri WHERE ziyaret_id = '$id'");

	if ($sonuc > 0) {
		header("location:../ziyaretci-defteri.php?durum=basarili");
	} else {
		header("location:../ziyaretci-defteri.php?durum=basarisiz");

	}

} catch (PDOException $e) {
	die($e->getMessage());
}

$conn = null;

?>