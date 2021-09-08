<?php


try {

	include '../ayar.php';
	$id = $_GET['id'];


	$data = $conn->query("SELECT * FROM galeri WHERE id = '$id' ")->fetch(PDO::FETCH_ASSOC);
	unlink('../../'.$data['img']);
	
	
	$sonuc = $conn->exec("DELETE FROM galeri WHERE id = '$id'");

	if ($sonuc > 0) {
		header("location:../galeri-yonetim.php?durum=basarili");
	} else {
		header("location:../galeri-yonetim.php?durum=basarisiz");

	}

} catch (PDOException $e) {
	die($e->getMessage());
}

$conn = null;

?>