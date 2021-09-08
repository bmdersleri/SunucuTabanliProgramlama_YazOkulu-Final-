<?php include '../ayar.php';

$id = $_GET['id'];
$galeri = $conn->query("SELECT * FROM galeri WHERE id = '$id' ")->fetch(PDO::FETCH_ASSOC);

unlink('../../'.$galeri['img']);


$sonuc = $conn->exec("DELETE FROM galeri WHERE id = '$id'");
if ($sonuc > 0) {
	header("location: ../galeri-yonetim.php?durum=basarili");
} else {
	header("location: ../galeri-yonetim.php?durum=basarisiz");
}






?>