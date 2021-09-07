<?php !defined("admin") ? die("hacking ?") : null;?>
<?php 



try {
	
	$host   = "localhost";
	$dbname = "blog";
	$kadi   = "root";
	$sifre  = "";
	
	
	$db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8","$kadi","$sifre");
	
}catch (PDOException $mesaj){
	
	
	echo $mesaj->getmessage();
	
}

?>