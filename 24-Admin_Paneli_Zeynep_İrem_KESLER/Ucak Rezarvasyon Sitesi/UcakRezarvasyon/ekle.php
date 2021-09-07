<?php 
include("vt.php"); 
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Veritabanı İşlemleri</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="col-md-6">
<form action="" method="post">
    <h1> Müşteri Ekle </h1>
    <table class="table">
        
        <tr>
            <td>AD</td>
            <td><input type="text" name="ad" class="form-control" ></td>
        </tr>

        <tr>
            <td>Soyad</td>
            <td><input type="text" name="soyad" class="form-control" ></td>
        </tr>
        <tr>
            <td>Telefon</td>
            <td><input type="text" name="tel" class="form-control" ></td>
        </tr>
        <tr>
            <td>Eposta</td>
            <td><input type="text" name="eposta" class="form-control" ></td>
        </tr>
        <tr>
            <td>Dogum Tarihi</td>
            <td><input type="date" name="dogumt" class="form-control" ></td>
        </tr>
        <tr>
            <td>Cinsiyet</td>
            <td><input type="text" name="cinsiyet" class="form-control" ></td>
        </tr>

        <tr>
            <td></td>
            <td><input class="btn btn-primary"  type="submit" value="Ekle"></td>
        </tr>

    </table>

</form>



<?php 

if ($_POST) { 

   
    $ad = $_POST['ad']; 
    $soyad = $_POST['soyad'];
    $telefon = $_POST['tel']; 
    $eposta = $_POST['eposta']; 
    $dogumt = $_POST['dogumt']; 
    $cinsiyet = $_POST['cinsiyet']; 

    if ($ad<>"" && $soyad<>"") { 
    
        
        
        if ($baglanti->query("INSERT INTO musteri (AD, SOYAD,TELEFON,EPOSTA,DogumTarihi,Cinsiyet) VALUES ('$ad','$soyad','$telefon','$eposta','$dogumt','$cinsiyet')")) 
        {
            echo "Veri Eklendi"; 
            header( "refresh:2;url=islemgerceklesti.php" );
            
        }
        else
        {
            echo "Hata oluştu";
        }

    }

}

?>
</div>