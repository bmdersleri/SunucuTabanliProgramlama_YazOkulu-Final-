<?php include '../ayar.php';

$id = $_GET['id'];


$sonuc = $conn->exec("DELETE FROM iletisim WHERE iletisim_id = '$id'");
if ($sonuc > 0) {
	header("location: ../index.php?durum=basarili");
} else {
	header("location: ../index.php?durum=basarisiz");
}






?>