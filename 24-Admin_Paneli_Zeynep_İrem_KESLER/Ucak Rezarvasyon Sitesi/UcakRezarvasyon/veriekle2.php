<?php


$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$tel=$_POST['tel'];
$dogumt=$_POST['dogumt'];
$eposta=$_POST['eposta'];
$cinsiyet=$_POST['cinsiyet'];
$kalkis=$_POST['kalkis'];
$inis=$_POST['inis'];
$nereye=$_POST['nereye'];
$nerden=$_POST['nerden'];
$biletTuru=$_POST['biletTuru'];

$baglan= mysqli_connect("localhost","root","","ucakv2");

if (!$baglan) {
    echo "Hata: MySQL'e bağlanılamadı." . PHP_EOL;
    exit;
}

mysqli_set_charset($baglan,"utf8");


$sql="INSERT INTO musteri(AD,SOYAD,TELEFON,EPOSTA,DogumTarihi,Cinsiyet) 
VALUES('" .$ad. "','" .$soyad. "','" .$tel. "','" .$eposta. "','" .$dogumt. "','" .$cinsiyet. "') " ; 

$sql2 = "INSERT INTO tekyon(Nerden,Nereye,UcusTarihi,inisTarihi) 
VALUES('" .$nerden. "','" .$nereye. "','" .$kalkis. "','" .$inis. "') "; 

$sonuc= mysqli_query($baglan, $sql);
$sonuc= mysqli_query($baglan, $sql2);
if(!$sonuc){
	 echo ("Hata:".$baglan->error);
	 exit;
} else {
	
	header( "refresh:1;url=basari.php" );
	
} 



?>