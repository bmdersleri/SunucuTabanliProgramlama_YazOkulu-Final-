<?php 

error_reporting(0);
session_start();

$servername="localhost";
$username = "root";
$password = "";
$dbname="ucakv2";


$conn = new mysqli($servername, $username, $password , $dbname);
$now = mysqli_set_charset($conn , "utf8");
if ($conn -> connect_error){
    die("Connection Failed : " .$conn->connect_error);
}

if ($_POST){
    $mail = $_POST["mail"];
    $pass = $_POST["pass"];

    $giris = "select * from users where mail='$mail' and sifre = '$pass'";
    $getir = $conn->query($giris);
    if ($getir->num_rows>0){
        while ($row = $getir->fetch_assoc()){
            $_SESSION['ID'] = $row["ID"];
            $_SESSION['kullaniciAdi'] = $row['kullaniciAdi'];

            header("location:adminpanell.php");
            
        }
    }







}   













?>