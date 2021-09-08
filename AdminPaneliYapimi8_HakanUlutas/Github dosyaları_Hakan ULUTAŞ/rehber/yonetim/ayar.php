<?php
/* Veritabanına Bağlanma Kodu */
$host="localhost";  // Host Adresi
$db_name="rehber";  // Veritabanı Adı
$db_user="root";    // Veritabanına Yetkisi Olan Kullanıcı Adı
$pass="";    // Şifre

try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $db_user, $pass);
    //echo 'İşlem Başarılı' . '<br>';
}

catch (PDOExpception $e) {
    echo $e->getMessage();
}

/* Veritabanına Bağlanma Kodu Bitiş */


//Seo uyumlu url fonksiyonu
function seo($s) {
    $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',' ',',','?');
    $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','','');
    $s = str_replace($tr,$eng,$s);
    $s = strtolower($s);
    $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
    $s = preg_replace('/\s+/', '-', $s);
    $s = preg_replace('|-+|', '-', $s);
    $s = preg_replace('/#/', '', $s);
    $s = str_replace('\'', '-', $s);
    $s = str_replace('.', '', $s);
    $s = str_replace('!', '', $s);
    $s = str_replace('´', '', $s);
    $s = str_replace('’', '', $s);
    $s = str_replace('&', 've', $s);
    $s = trim($s, '-');
    return $s;

}



?>