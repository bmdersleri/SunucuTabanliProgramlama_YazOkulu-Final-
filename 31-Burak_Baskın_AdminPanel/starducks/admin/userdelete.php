<?php


session_start(); 


if (!(isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "6789")) {
    header("location:login.php");
} 

if ($_GET) {

    $page = $_GET["sayfa"];
    include("../inc/vt.php"); 
    $query = $connection->prepare("SELECT * FROM $page Where id=:id");
    $query->execute(['id' => (int)$_GET["id"]]);
    $result = $query->fetch();
    

 
    $where = ['id' => (int)$_GET['id']];
    $durum = $connection->prepare("DELETE FROM $page WHERE id=:id")->execute($where);
    if ($durum) {
        header("location:$page.php");
    }
}
?>