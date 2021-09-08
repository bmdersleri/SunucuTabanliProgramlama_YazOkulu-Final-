<?php

ob_start();

session_start();

if (!isset($_SESSION["admin_giris"])) 

{

	header('location:giris.php');

}else {

	

	include 'ayar.php';



}

?>