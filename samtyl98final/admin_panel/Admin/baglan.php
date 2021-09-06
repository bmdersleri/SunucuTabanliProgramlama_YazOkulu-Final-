<?php 
$kullaniciadi="bahadir";
$sifre="nural";
$sunucu="localhost";
$database="admin";

$baglan=mysqli_connect($sunucu,$kullaniciadi,$sifre);
mysqli_query("SET NAMES UTF8");

if(!$baglan)
{
echo "Bağlantı hatası:".mysqli_error();
exit();
}
$db=mysqli_select_db($database);
if(!$db) {echo " Veritabanı hatası:".mysqli_error(); echo "<br>";
echo "Veritabanı bağlantı bilgilerini /baglan.php dosyasından düzenleyebilirsiniz.";
exit();
}
?>