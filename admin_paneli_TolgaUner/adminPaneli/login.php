<!DOCTYPE html>
<html>

<body  style="background-color:#F0E5CF;"></body>

</html>

<?php
include("ayar.php");
session_start();
ob_start();
if(($_POST["username"]==$user) and ($_POST["password"]==$pass)){
$_SESSION["login"] = "true";
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;
header("Location:admin.php");
}else{
 echo "<p align=center>Kullancı Adı veya Şifre Yanlış </p> " ;  
echo "<p align=center>Giriş sayfasına yönlendiriliyorsunuz. </p>" ;
header("Refresh: 2; url=giris.php");
}
ob_end_flush();
?>


