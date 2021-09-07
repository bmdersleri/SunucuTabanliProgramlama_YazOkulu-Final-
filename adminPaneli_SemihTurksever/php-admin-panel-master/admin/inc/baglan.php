<?php 

try{
	$db=new PDO("mysql:host=localhost;dbname=fotograf;charset=utf8",'root','se09mih08');
	//echo "Veritabanı bağlantısı başarılı";
}
catch(PDOException $e){
	echo $e->getMessage();
}

?>