<?php
require_once 'db.php';

function anaMenuCek($db_connection)
{
    $stmt = $db_connection->prepare("SELECT * FROM tbl_menu WHERE anaMenu_id IS NULL OR anaMenu_id=0");
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}

function altMenuCekWithID($db_connection,$menu_id)
{
    $stmt = $db_connection->prepare("SELECT * FROM tbl_urun WHERE menu_id=:menu_id");
    $stmt->execute(array("menu_id" => $menu_id));
    $data = $stmt->fetchAll();
    return $data;
}

function anaMenuCekWithID($db_connection,$menu_id)
{
    $stmt = $db_connection->prepare("SELECT anaMenu_id FROM tbl_menu WHERE menu_id=:menu_id");
    $stmt->execute(array("menu_id" => $menu_id));
    $data = $stmt->fetchAll();
    return $data;
}

function yeniUrunCek($db_connection)
{
    $stmt = $db_connection->prepare("SELECT * FROM tbl_urun ORDER BY urun_id DESC LIMIT 12");
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}

function altMenuCek($db_connection, $anaMenu_id)
{
    $stmt = $db_connection->prepare("SELECT * FROM tbl_menu WHERE anaMenu_id = :anaMenu_id");
    $stmt->execute(array("anaMenu_id" => $anaMenu_id));
    $data = $stmt->fetchAll();
    return $data;
}

function urunCek($db_connection, $menu_id, $basla)
{
    $stmt = $db_connection->prepare("SELECT * FROM tbl_urun u JOIN tbl_menu m ON u.menu_id=m.menu_id WHERE u.menu_id= :menu_id ORDER BY urun_id DESC LIMIT " . $basla . ",12");
    $stmt->execute(array("menu_id" => $menu_id));
    $data = $stmt->fetchAll();
    return $data;
}

function urunCekFiyat($db_connection, $menu_id, $basla, $minFiyat, $maxFiyat)
{
    $stmt = $db_connection->prepare("SELECT * FROM tbl_urun u JOIN tbl_menu m ON u.menu_id=m.menu_id WHERE u.menu_id= :menu_id AND u.urunFiyat> :minFiyat AND u.urunFiyat< :maxFiyat ORDER BY urun_id DESC LIMIT " . $basla . ",12");
    $stmt->execute(array("menu_id" => $menu_id, "minFiyat" => $minFiyat, "maxFiyat" => $maxFiyat));
    $data = $stmt->fetchAll();
    return $data;
}


function totalUrunCekWithFiyat($db_connection, $menu_id, $minFiyat, $maxFiyat)
{
    $stmt = $db_connection->prepare("SELECT * FROM tbl_urun u JOIN tbl_menu m ON u.menu_id=m.menu_id WHERE u.menu_id= :menu_id AND urunFiyat> :minFiyat AND urunFiyat< :maxFiyat ");
    $stmt->execute(array( "menu_id" => $menu_id, "minFiyat" => $minFiyat, "maxFiyat" => $maxFiyat));
    $data = $stmt->fetchAll();
    return $data;
}

function urunCekWithAdFiyat($db_connection, $urunAd, $basla, $minFiyat, $maxFiyat)
{
    $stmt = $db_connection->prepare("SELECT * FROM tbl_urun WHERE urunAd LIKE :urunAd AND urunFiyat> :minFiyat AND urunFiyat< :maxFiyat ORDER BY urun_id DESC LIMIT " . $basla . ",12");
    $stmt->execute(array( "urunAd" => ('%' . $urunAd . '%'), "minFiyat" => $minFiyat, "maxFiyat" => $maxFiyat));
    $data = $stmt->fetchAll();
    return $data;
}

function totalUrunCekWithAdFiyat($db_connection, $urunAd, $minFiyat, $maxFiyat)
{
    $stmt = $db_connection->prepare("SELECT * FROM tbl_urun WHERE urunAd LIKE :urunAd AND urunFiyat> :minFiyat AND urunFiyat< :maxFiyat");
    $stmt->execute(array("urunAd" => ('%' . $urunAd . '%'), "minFiyat" => $minFiyat, "maxFiyat" => $maxFiyat));
    $data = $stmt->fetchAll();
    return $data;
}

function sepeteUrunCek($db_connection, $urun_id)
{
    $stmt = $db_connection->prepare("SELECT * FROM tbl_urun WHERE urun_id = :urun_id");
    $stmt->execute(array("urun_id" => $urun_id));
    $data = $stmt->fetchAll();
    return $data;
}

function urunCekWithAd($db_connection, $urunAd, $basla)
{
    $stmt = $db_connection->prepare("SELECT * FROM tbl_urun WHERE urunAd LIKE :urunAd ORDER BY urun_id DESC LIMIT " . $basla . ",12");
    $stmt->execute(array("urunAd" => ('%' . $urunAd . '%')));
    $data = $stmt->fetchAll();
    return $data;
}

function urunCekWithAramaMenu($db_connection, $aranacak)
{
    $stmt = $db_connection->prepare("SELECT * FROM tbl_anaarama WHERE aranacak= :aranacak");
    $stmt->execute(array("aranacak" => ('%' . $aranacak . '%')));
    $data = $stmt->fetchAll();
    return $data;
}

function urunCekWithAranacak($db_connection, $menu_id, $basla)
{
    $stmt = $db_connection->prepare("SELECT * FROM tbl_menu m JOIN tbl_urun u ON m.menu_id=u.menu_id WHERE m.anaMenu_id= :menu_id ORDER BY urun_id DESC LIMIT " . $basla . ",12");
    $stmt->execute(array("menu_id" => $menu_id));
    $data = $stmt->fetchAll();
    return $data;
}


function urunCekWithAranacakTotal($db_connection, $menu_id)
{
    $stmt = $db_connection->prepare("SELECT * FROM tbl_menu m JOIN tbl_urun u ON m.menu_id=u.menu_id WHERE m.anaMenu_id= :menu_id");
    $stmt->execute(array("menu_id" => $menu_id));
    $data = $stmt->fetchAll();
    return $data;
}


function totalUrunCekWithAd($db_connection, $urunAd)
{
    $stmt = $db_connection->prepare("SELECT * FROM tbl_urun WHERE urunAd LIKE :urunAd");
    $stmt->execute(array("urunAd" => ('%' . $urunAd . '%')));
    $data = $stmt->fetchAll();
    return $data;
}


function totalUrunCek($db_connection, $menu_id)
{
    $stmt = $db_connection->prepare("SELECT * FROM tbl_urun u JOIN tbl_menu m ON u.menu_id=m.menu_id WHERE u.menu_id= :menu_id");
    $stmt->execute(array("menu_id" => $menu_id));
    $data = $stmt->fetchAll();
    return $data;
}

function randomUrunCekWithAnaMenu_id($db_connection, $menu_id)
{
    $stmt = $db_connection->prepare("SELECT u.urun_id,u.urunAd,u.urunFiyat,u.urunIndirim FROM tbl_urun u JOIN tbl_menu m ON m.menu_id=u.menu_id WHERE m.anaMenu_id=:menu_id AND u.urunIndirim>0 ORDER BY RAND() LIMIT 12");
    $stmt->execute(array("menu_id" => $menu_id));
    $data = $stmt->fetchAll();
    return $data;
}

function get_city($db_connection, $term)
{
    $stmt = $db_connection->prepare("SELECT * FROM tbl_urun WHERE urunAd LIKE '%" . $term . "%' ORDER BY urunAd ASC LIMIT 0,8");
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}

function getArama($db_connection, $term)
{
    $stmt = $db_connection->prepare("SELECT * FROM tbl_anaarama WHERE aranacak LIKE '%" . $term . "%' ORDER BY aranacak ASC LIMIT 0,8");
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}

if (isset($_GET['term'])) {
    $getCity = getArama($db_connection, $_GET['term']);
    $cityList = array();
    foreach ($getCity as $city) {
        $cityList[] = $city['aranacak'];
    }

    $getCity = get_city($db_connection, $_GET['term']);

    foreach ($getCity as $city) {
        $cityList[] = $city['urunAd'];
    }

    rsort($cityList);

    echo json_encode($cityList);
}

function urunCekDetay($db_connection, $urun_id)
{
    $stmt = $db_connection->prepare("SELECT * FROM tbl_urun WHERE urun_id= :urun_id");
    $stmt->execute(array("urun_id" => $urun_id));
    $data = $stmt->fetchAll();
    return $data;
}

function randKategoriCek($db_connection)
{
    $stmt = $db_connection->prepare("SELECT * FROM tbl_menu WHERE anaMenu_id=0 ORDER BY RAND() LIMIT 2");
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}

function randUrunCek($db_connection)
{
    $stmt = $db_connection->prepare("SELECT * FROM tbl_urun WHERE urunIndirim>0 ORDER BY RAND() LIMIT 12");
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}


function resimCek($db_connection, $urun_id)
{
    $stmt = $db_connection->prepare("SELECT fotoYol,foto_id FROM tbl_foto WHERE urun_id= :urun_id");
    $stmt->execute(array("urun_id" => $urun_id));
    $data = $stmt->fetchAll();
    return $data;
}

$request = 0;

if (isset($_POST['request'])) {
    $request = $_POST['request'];
}

if ($request == 1) {

    $anaMenu_id = $_POST['anaMenu_id'];

    $stmt = $db_connection->prepare("SELECT * FROM tbl_menu WHERE anaMenu_id = :anaMenu_id");
    $stmt->execute(array("anaMenu_id" => $anaMenu_id));
    $statesList = $stmt->fetchAll();
    $response = array();
    foreach ($statesList as $state) {
        $response[] = array(
            "menu_id" => $state['menu_id'],
            "menuAd" => $state['menuAd']
        );
    }

    echo json_encode($response);
    exit;
}

if (isset($_POST["urunDuzenle"])) {

    $stmt = $db_connection->prepare("SELECT * FROM tbl_urun WHERE menu_id= :menu_id AND urunAd LIKE :urunAd ORDER BY urun_id DESC");
    $stmt->execute(array("menu_id" => $_POST["menu_id"], "urunAd" => ('%' . $_POST["urunAdi"] . '%')));
    $data = $stmt->fetchAll();

    $response = array();
    foreach ($data as $row) {
        $response[] = array(
            "urun_id" => $row['urun_id'],
            "urunAd" => $row['urunAd'],
            "urunFiyat" => $row['urunFiyat'],
            "urunIndirim" => $row['urunIndirim']
        );
    }

    echo json_encode($response);
    exit;
}

if ($request==2) {

    $stmt = $db_connection->prepare("SELECT * FROM tbl_kullanici WHERE email= :email AND parola= :parola");
    $stmt->execute(array("email" => $_POST["girisEmail"],"parola" => $_POST["girisSifre"]));
    $data = $stmt->fetchAll();


    if(count($data))
    {
        session_start();
        ob_start();
        $_SESSION['adSoyad'] = $data[0][3] . " " . $data[0][4];
        $_SESSION['email'] = $data[0][1];
        $_SESSION['kullanici_id'] = $data[0][0];
        echo 1;
    }
    else
    {
        echo 0;
    }

}

?>