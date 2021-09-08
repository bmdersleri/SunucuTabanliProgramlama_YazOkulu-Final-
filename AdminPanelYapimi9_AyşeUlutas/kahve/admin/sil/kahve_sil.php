<?php include '../ayar.php';

$id = $_GET['id'];
$kahve = $conn->query("SELECT * FROM kahveler WHERE kahve_id = '$id' ")->fetch(PDO::FETCH_ASSOC);

unlink('../../'.$kahve['kahve_img']);

$sonuc = $conn->exec("DELETE FROM kahveler WHERE kahve_id = '$id'");
if ($sonuc > 0) {
	header("location: ../kahve-yonetim.php?durum=basarili");
} else {
	header("location: ../kahve-yonetim.php?durum=basarisiz");
}






?>