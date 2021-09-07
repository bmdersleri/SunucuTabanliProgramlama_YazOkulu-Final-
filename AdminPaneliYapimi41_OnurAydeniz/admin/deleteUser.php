<?php
session_start(); 
if (!(isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "6789")) {
    header("location:login.php");
}

if ($_GET) {
    $sayfa = $_GET["sayfa"];
    $returnPage = $_GET["returnPage"];
    include("../inc/vt.php");
    $sorgu = $baglanti->prepare("SELECT * FROM $sayfa Where id=:id");
    $sorgu->execute(['id' => (int)$_GET["id"]]);
    $sonuc = $sorgu->fetch();
    $where = ['id' => (int)$_GET['id']];
    $durum = $baglanti->prepare("DELETE FROM $sayfa WHERE id=:id")->execute($where);
    if ($durum) {
        header("location:$returnPage.php"); 
    }
}
?>