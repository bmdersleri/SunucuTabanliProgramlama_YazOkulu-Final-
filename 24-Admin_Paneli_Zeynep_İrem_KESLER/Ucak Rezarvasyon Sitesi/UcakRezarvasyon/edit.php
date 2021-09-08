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
</div>
<div class="col-md-7">
<table class="table">
    
    <tr>
        <th>Musteri ID</th>
        <th>AD</th>
        <th>SOYAD</th>
        <th>Telefon</th>
        <th>Dogum Tarihi</th>
        <th>EPOSTA</th>
        <th>Cinsiyet</th>
        <th></th>
        <th></th>
    </tr>



<?php 

$sorgu = $baglanti->query("SELECT * FROM musteri"); 

while ($satir = $sorgu->fetch_assoc()) { 

    $ad=$satir['AD'];
    $soyad=$satir['SOYAD'];
    $tel=$satir['TELEFON'];
    $id=$satir['musteriID'];
    $dogumt=$satir['DogumTarihi'];
   $EPOSTA=$satir['EPOSTA'];
   $cinsiyet=$satir['Cinsiyet'];



?>
    
    <tr>
        <td><?php echo $id;  ?></td>
        <td><?php echo $ad; ?></td>
        <td><?php echo $soyad; ?></td>
        <td><?php echo $tel; ?></td>
        <td><?php echo $dogumt; ?></td>
        <td><?php echo $EPOSTA; ?></td>
        <td><?php echo $cinsiyet; ?></td>
        <td><a href="duzenle.php?id=<?php echo $id; ?>" class="btn btn-primary">Düzenle</a></td>
        <td><a href="sil.php?id=<?php echo $id; ?>" class="btn btn-danger">Sil</a></td>
    </tr>

<?php 
} 

?>

</table>
</div>
</div>
</body>
</html>