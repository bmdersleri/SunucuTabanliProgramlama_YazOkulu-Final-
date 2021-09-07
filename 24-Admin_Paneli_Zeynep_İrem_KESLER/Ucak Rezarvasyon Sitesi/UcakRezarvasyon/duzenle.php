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

<?php 

$sorgu = $baglanti->query("SELECT * FROM musteri WHERE musteriID =".(int)$_GET['id']); 


$sonuc = $sorgu->fetch_assoc(); 

?>

<div class="container">
<div class="col-md-6">

<form action="" method="post">
    
    <table class="table">
        
    <tr>
		<td>Adı</td>
		<td><input type="text" name="adi" 
			value=<?php echo $sonuc['AD'];?> ></td>
	</tr>
	<tr>
		<td>Soyadı</td>
		<td><input type="text" name="soyadi" 
			value=<?php echo $sonuc['SOYAD'];?> 
		></td>
	</tr>
	<tr>
		<td>Telefon</td>
		<td><input type="text" name="telefon" 
			value=<?php echo $sonuc['TELEFON'];?>></td>
	</tr>
	<tr>
	<tr>
		<td>Dogum Tarihi</td>
		<td><input type="text" name="dogumt" 
			value=<?php echo $sonuc['DogumTarihi'];?>>
		</td>
	</tr>
	<tr>
	<tr>
		<td>E-Posta</td>
		<td><input type="text" name="EPOSTA" 
			value=<?php echo $sonuc['EPOSTA'];   ?>
		></td>
	</tr>
	<tr>
	<tr>
		<td>Cinsiyet</td>
		<td><input type="text" name="cinsiyet" 
			value=<?php echo $sonuc['Cinsiyet'];   ?>
		></td>
	</tr>
	<tr>
        <tr>
            <td></td>
            <td><input type="submit" class="btn btn-primary" value="Kaydet"></td>
        </tr>

    </table>

</form>
</div>
<div>
<?php 

if ($_POST) { 
    
    
$adi=$_POST['adi']; 
$soyadi=$_POST['soyadi']; 
$telefon=$_POST['telefon'];
$EPOSTA=$_POST['EPOSTA'];
$dogumt=$_POST['dogumt'];
$cinsiyet=$_POST['cinsiyet'];
    
    if ($adi<>"" && $soyadi<>"" && $telefon<>""&& $EPOSTA<>""&& $dogumt<>""&& $cinsiyet<>"") { // Veri alanlarının boş olmadığını kontrol ettiriyoruz.
        
        
        if ($baglanti->query("UPDATE musteri SET AD = '$adi', SOYAD = '$soyadi' , TELEFON = '$telefon' , EPOSTA = '$EPOSTA' , DogumTarihi = '$dogumt' , Cinsiyet = '$cinsiyet'WHERE musteriID =".$_GET['id'])) 
        {
            header( "refresh:2;url=islemgerceklesti.php" );
            
        }
        else
        {
            echo "Hata oluştu"; 
        }
    }
}
?>
</body>
</html>