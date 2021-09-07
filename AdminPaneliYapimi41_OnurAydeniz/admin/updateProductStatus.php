<?php
if ($_POST) {
    include("../inc/vt.php");
    $id = (int)$_POST['id'];
    $durum = (int)$_POST['durum'];
    $satir = array('id' => $id,
        'durum' => $durum,
    );
    $sql = "UPDATE urunler SET aktif=:durum WHERE id=:id;";
    $durum = $baglanti->prepare($sql)->execute($satir);
    echo $id . " nolu kayıt değiştirildi.";
}
?>