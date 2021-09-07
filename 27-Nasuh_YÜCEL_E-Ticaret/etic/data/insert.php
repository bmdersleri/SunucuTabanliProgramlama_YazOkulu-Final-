<?php
$db_connection ="";
include 'db.php';
if (is_array($_FILES)) {
    $targetPath = "";
    if (isset($_FILES['userImage'])) { //gerekirse sil
        if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
            $sourcePath = $_FILES['userImage']['tmp_name'];
            $targetPath = "../urunResimler/" . md5(uniqid()) . $_FILES['userImage']['name'];
            move_uploaded_file($sourcePath, $targetPath);
            $y = fotoEkle($db_connection, $targetPath, $_POST["urun_id"]);

        }
        if (isset($_POST["urunEkle"])) {
            $stmt = $db_connection->prepare("INSERT INTO tbl_urun SET urunAd = :urunAd , urunFiyat = :urunFiyat,urunIndirim = :urunIndirim,urunAciklama = :urunAciklama,menu_id=:menu_id");
            $insert = $stmt->execute(array("urunAd" => $_POST["urunAdi"], "urunFiyat" => $_POST["urunFiyat"], "urunIndirim" => $_POST["urunIndirim"], "urunAciklama" => $_POST["urunAciklama"], "menu_id" => $_POST["menu_id"]));
            if ($insert) {
                $y = fotoEkle($db_connection, $targetPath, $db_connection->lastInsertId());
                return $y;
            }
        }
    }
}

function fotoEkle($db_connection, $fotoYol, $urun_id)
{
    $stmt = $db_connection->prepare("INSERT INTO tbl_foto SET fotoYol = :fotoYol , urun_id = :urun_id");
    $insert = $stmt->execute(array("fotoYol" => $fotoYol, "urun_id" => $urun_id));
    if ($insert) {
        return $db_connection->lastInsertId();
    } else {
        return "HATA";
    }
}

if (isset($_POST["yollaKategoriEkle"])) {
    $stmt = $db_connection->prepare("INSERT INTO tbl_menu SET menuTur = :menuTur , anaMenu_id = :anaMenu_id,menuAd = :menuAd");
    $insert = $stmt->execute(array("menuTur" => $_POST["mainCat"], "anaMenu_id" => $_POST["altKategori"], "menuAd" => $_POST["menuAdi"]));
    if ($insert) {
        echo json_encode($db_connection->lastInsertId());
    } else {
        return "HATA";
    }
}

if ($_POST["istek"] == "uyeOl") {
    $stmt = $db_connection->prepare("INSERT INTO tbl_kullanici SET email = :email , parola = :parola,ad = :ad,soyad = :soyad");
    $insert = $stmt->execute(array("email" => $_POST["kayitEmail"], "parola" => $_POST["kayitSifre"], "ad" => $_POST["ad"], "soyad" => $_POST["soyad"]));
    if ($insert) {
        $stmt = $db_connection->prepare("SELECT * FROM tbl_kullanici WHERE kullanici_id= :kullanici_id");
        $stmt->execute(array("kullanici_id" => $db_connection->lastInsertId()));
        $data = $stmt->fetchAll();

        session_start();
        ob_start();
        $_SESSION['adSoyad'] = $data[0][3] . " " . $data[0][4];
        $_SESSION['email'] = $data[0][1];
        $_SESSION['kullanici_id'] = $data[0][0];
        echo 1;

    }
}

?>