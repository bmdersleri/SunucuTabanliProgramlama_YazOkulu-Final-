<?php
//Bu sayfada veri tabanında gelen idye göre silme işlemi yapılmaktadır.
try {

	include '../inc/ayar.php';
	$id = $_GET['id'];


	$data = $conn->query("SELECT * FROM blog WHERE id = '$id' ")->fetch(PDO::FETCH_ASSOC);
	unlink('../../'.$data['resim']);


	$sonuc = $conn->exec("DELETE FROM blog WHERE id = '$id'");

	if ($sonuc > 0) {
		header("location:../blog-ayar.php?durum=basarili");
	} else {
		header("location:../blog-ayar.php?durum=basarisiz");

	}

} catch (PDOException $e) {
	die($e->getMessage());
}

$conn = null;

?>