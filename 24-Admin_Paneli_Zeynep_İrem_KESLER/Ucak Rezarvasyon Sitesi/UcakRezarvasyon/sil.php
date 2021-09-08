<?php 

if ($_GET) 
{

include("vt.php");


if ($baglanti->query("DELETE FROM musteri WHERE musteriID =".(int)$_GET['id'])) 
{
    header("location:edit.php"); 
}
}

?>