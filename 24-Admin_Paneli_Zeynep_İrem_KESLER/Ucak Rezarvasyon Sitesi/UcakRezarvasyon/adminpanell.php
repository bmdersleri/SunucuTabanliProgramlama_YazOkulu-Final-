<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adminpanel.css">
    

</head>
<body>
<?php  
if (!isset($_SESSION["ID"])){
    echo "Giriş Yapınız!";
    echo '<a href="s.php"> Yönlendir </a>';
    header("location:s.php");
} ?>
    <section class="buttons">
        <h1>Admin Paneli</h1>
      <div class="container">
        
        <a href="http://localhost/UcakRezarvasyon/edit.php" class="btn btn-1">
          <svg>
            <rect x="0" y="0" fill="none" width="100%" height="100%"/>
          </svg>
          Güncelle / Sil
        </a>

        <a href="http://localhost/UcakRezarvasyon/arama.php" class="btn btn-4"><span>Müşteri Ara</span></a> 
        <a href="http://localhost/UcakRezarvasyon/ekle.php" class="btn btn-5">Müşteri Ekle</a> 
      </div>
      <?php echo "Hoşgeldin,";
      echo $_SESSION["kullaniciAdi"];
     echo' <a href="exit.php"> Çıkış</a>'; ?>
    </section>


</body>
</html>