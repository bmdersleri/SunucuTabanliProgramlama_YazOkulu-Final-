<?php


session_start();

if (!(isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "6789")) {
    header("location:login.php");
}

if ($_GET) {

    $sayfa = $_GET["sayfa"];
    include("../inc/vt.php");
    $querry = $connection->prepare("SELECT * FROM $sayfa WHERE id=:id");
    $querry->execute(['id' => (int)$_GET["id"]]);
    $result = $querry->fetch();
    unlink('../img/' . $result["photo"]);


    $where = ['id' => (int)$_GET['id']];
    $status = $connection->prepare("DELETE FROM $sayfa WHERE id=:id")->execute($where);
    if ($status) {
        header("location:$sayfa.php"); 
    }
}
?>