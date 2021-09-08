<?php
$db_connection = "";
include 'db.php';

if ($_POST["request"] == "guncelle") {
    $stmt = $db_connection->prepare("UPDATE tbl_urun SET urunAd= :urunAd, urunFiyat= :urunFiyat, urunIndirim= :urunIndirim, urunAciklama= :urunAciklama, menu_id= :menu_id WHERE urun_id= :urun_id");
    $stmt->execute(array("urunAd" => $_POST['urunAd'],"urunFiyat" => $_POST['urunFiyat'],"urunIndirim" => $_POST['urunIndirim'],"urunAciklama" => $_POST['urunAciklama'],"menu_id" => $_POST['menu_id'],"urun_id" => $_POST['urun_id'],));
    $data = $stmt->fetchAll();
    echo json_encode($data);
}

?>