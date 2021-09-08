<?php include 'yonetim/ayar.php';


if (isset($_POST['mesajSubmit'])) {

    $mesajGonder = $conn->prepare("INSERT INTO iletisim SET
        ad_soyad = :ad_soyad,
        email = :email,
        mesaj = :mesaj");

    $insert = $mesajGonder->execute(array(
        "ad_soyad" => $_POST['ad_soyad'],
        "email" => $_POST['email'],
        "mesaj" => $_POST['mesaj']
    ));

    if ($insert) {
    	header("location: iletisim?status=ok");
    }else {

    	header("location: iletisim?status=error");
    }

}






if (isset($_POST['ziyaretGonder'])) {

    $mesajGonder = $conn->prepare("INSERT INTO ziyaretci_defteri SET
        ziyaret_yorum = :ziyaret_yorum,
        ziyaret_adi = :ziyaret_adi");

    $insert = $mesajGonder->execute(array(
        "ziyaret_yorum" => $_POST['ziyaret_yorum'],
        "ziyaret_adi" => $_POST['ziyaret_adi']
    ));

    if ($insert) {
    	header("location: ziyaretci-defteri?status=ok");
    }else {

    	header("location: ziyaretci-defteri?status=error");
    }

}




 ?>