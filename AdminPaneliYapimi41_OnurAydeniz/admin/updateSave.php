<?php 
include("../inc/vt.php");
if ($_POST) { 
	$alan = $_POST['alan'];
	$deger = $_POST['deger'];
	$deger = str_replace('{0}','+',$deger); 
	$id = $_POST['id'];
	if ($baglanti->query("UPDATE urunler SET $alan = '$deger' WHERE id =$id"))
	{
		echo true;
	}
	else
	{
		echo false;
	}
}
?>