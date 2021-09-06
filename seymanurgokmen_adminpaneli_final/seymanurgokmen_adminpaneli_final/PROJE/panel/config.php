<?php
// $db = mysql_connect("localhost","root","")or die("mySql bağlantısı hatalı".mysql_error());
//$table = mysql_select_db("panel",$db)or die("veritabanı bağlantısı hatalı".mysql_error());
// mysql_query("SET NAMES utf8");
 session_start();
 $baglan = mysqli_connect("localhost","root","","panel");
 if(!$baglan)
 {
	 die("connection failed:".mysqli_connect_error());
 }
 else
 {
	
 }
 ?>