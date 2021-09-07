<?php
$sayfa = "";
include("inc/adminhead.php");
if($_SESSION["yetki"]!=1)//kullanıcı yetkisi 1 e eşit değilse
{
    echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
    echo"<script>Swal.fire({title:'HATA!', text:'Yetkisiz kullanıcı',icon:'error', confirmButtonText:'Geri dön'}).then((value)=>{
    if(value.isConfirmed){window.location.href='index.php'}})</script>";
    exit;

}
if($_GET){
    $tablo=$_GET["tablo"];
    $id=(int)$_GET["id"];
    $sorgu=$baglanti->prepare("DELETE FROM $tablo WHERE id=:id");
    $sonuc=$sorgu->execute(["id"=>$id]);
    if($sonuc){
        echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
        echo"<script>Swal.fire({title:'Başarılı!', text:'silme Başarılı',icon:'success', confirmButtonText:'Kapat'}).then((value)=>{
    if(value.isConfirmed){window.location.href='$tablo.php'}})</script>";

    }
}
include("inc/adminfooter.php");