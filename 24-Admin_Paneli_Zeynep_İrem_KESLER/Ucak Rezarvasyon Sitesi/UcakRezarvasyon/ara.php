<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="arama.css">
</head>
<body>
    
<?php
    $con= new mysqli("localhost","root","","ucakv2");
    $name = $_POST['search'];
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
$result = mysqli_query($con, "SELECT * FROM musteri
    WHERE AD LIKE '%{$name}%' OR SOYAD LIKE '%{$name}%'");
$sa = 0;
echo '<div class="hh"> <p>';
while ($row = mysqli_fetch_array($result))
{     
        echo  $row['musteriID']." ". " ".$row['AD'] . "  " ." ". $row['SOYAD'].  "  " ." ". $row['DogumTarihi'];     
        echo "<br>";       
        $sa++;   
}
echo ' </p> ';
echo '<br><br>
    <a href="adminpanell.php"> <p>   Geri Dön  </p> </a> </div>';


if ($sa == 0) 
{ 
    echo '<div class="hh"> <p> Böyle bir kayıt bulunamadı. </p><br><br>
    <a href="adminpanell.php"> <p>   Geri Dön  </p> </a> </div>';
}
    mysqli_close($con);
    ?>








</body>
</html>
