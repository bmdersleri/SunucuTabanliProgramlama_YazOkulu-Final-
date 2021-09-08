<?php
try {

	include '../ayar.php';
	$id = $_GET['id'];


	$data = $conn->query("SELECT * FROM blog WHERE id = '$id' ")->fetch(PDO::FETCH_ASSOC);
	unlink('../../'.$data['resim']);


	$sonuc = $conn->exec("DELETE FROM blog WHERE id = '$id'");

	if ($sonuc > 0) {
		header("location:../blog-yonetim.php?durum=basarili");
	} else {
		header("location:../blog-yonetim.php?durum=basarisiz");

	}

} catch (PDOException $e) {
	die($e->getMessage());
}

$conn = null;

?>