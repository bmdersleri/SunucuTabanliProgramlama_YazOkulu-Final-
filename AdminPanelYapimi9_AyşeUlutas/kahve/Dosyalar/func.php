<?php
@session_start();
include 'admin/ayar.php';

if (isset($_POST['mesajGonder'])) {
  $ekleme = $conn->prepare("INSERT INTO iletisim SET
    ad_soyad = :ad_soyad,
    email = :email,
    mesaj = :mesaj");

  $ekle_durum = $ekleme->execute(array(
    "ad_soyad" => $_POST['ad_soyad'],
    "email" => $_POST['email'],
    "mesaj" => $_POST['mesaj']
  ));

  if ($ekle_durum){
    header("Location: iletisim?durum=ok"); 

  } else {
    header("Location: iletisim?durum=hata");

  }




}




if (isset($_POST['uyeOl'])) {

  $ekleme = $conn->prepare("INSERT INTO kullanicilar SET
    kul_eposta = :kul_eposta,
    kul_adi = :kul_adi,
    kul_sifre = :kul_sifre");

  $ekle_durum = $ekleme->execute(array(
    "kul_eposta" => $_POST['kul_eposta'],
    "kul_adi" => $_POST['kul_adi'],
    "kul_sifre" => $_POST['kul_sifre']
  ));

  if ($ekle_durum){
    $_SESSION["kul_giris"] = "true";
    $_SESSION["kul_id"] = $conn->lastInsertId();

    header("Location: hesabim?durum=ok"); 

  } else {
    header("Location: hesabim?durum=hata");

  }



}




if (isset($_POST['profilGuncelle'])) {

  $guncelleme = $conn->prepare("UPDATE kullanicilar SET
    kul_eposta = :kul_eposta,
    kul_adi = :kul_adi
    WHERE kul_id = :kul_id");

  $guncelleme_durum = $guncelleme->execute(array(
    "kul_eposta" => $_POST['kul_eposta'],
    "kul_adi" => $_POST['kul_adi'],
    "kul_id" => $_POST['kul_id']
  ));

  if ($guncelleme_durum){
    $_SESSION["kul_giris"] = "true";
    header("Location: hesabim?durum=ok"); 
  } else {
    header("Location: hesabim?durum=hata");

  }



  

}



if (isset($_POST['girisYap'])) {
  

  $kullanicisor=$conn->prepare("SELECT * FROM kullanicilar WHERE kul_eposta = :kul_eposta AND kul_sifre = :kul_sifre ");
  $kullanicisor->execute(array(
    'kul_eposta' => $_POST['kul_eposta'],
    'kul_sifre' => $_POST['kul_sifre']

  ));


  $say=$kullanicisor->rowCount();
  if ($say > 0) {
    $kul_eposta = $_POST['kul_eposta'];
    $_SESSION['kul_giris'] = 'true';
    $kulBilgi = $conn->query("SELECT * FROM kullanicilar WHERE kul_eposta = '$kul_eposta' ")->fetch(PDO::FETCH_ASSOC);
    $_SESSION['kul_id'] = $kulBilgi['kul_id'];
    header("Location: hesabim?durum=ok");

  } else {

    header("Location: hesabim?durum=hata");

  }



}