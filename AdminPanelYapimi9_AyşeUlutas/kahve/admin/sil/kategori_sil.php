<?php include '../ayar.php';

$id = $_GET['id'];

$sonuc = $conn->exec("DELETE FROM kategoriler WHERE kategori_id = '$id'");
if ($sonuc > 0) {
	header("location: ../kategori-yonetim.php?durum=basarili");
} else {
	header("location: ../kategori-yonetim.php?durum=basarisiz");
}






?>