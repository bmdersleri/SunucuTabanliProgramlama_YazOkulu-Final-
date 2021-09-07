<!DOCTYPE html>
<html>

<body  style="background-color:#F0E5CF;"></body>

</html>

<?php
session_start();
ob_start();
session_destroy();
echo "<p align=center>Çıkış Yaptınız. Ana Sayfaya Yönlendiriliyorsunuz </p>" ;  
header("Refresh: 2; url=giris.php");
ob_end_flush();
?>