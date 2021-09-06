<?php !defined("index") ? die("hacking ?") : null;?>
<?php

   
   if($_SESSION){
	   
	   
	   $id = $_GET["id"];
	   
	   $v = $db->prepare("delete from mesajlar where mesaj_id=? and mesaj_kime=?");
	  $sil =  $v->execute(array($id,$_SESSION["id"]));
	  $x =  $v->rowCount();
	  
	  if($x){
		  
		if($sil){
			
			echo '<div class="basarili2">Mesajınız başarıyla silindi...</div>';
			
			header("refresh: 2; url=?do=mesaj");
			
		}  else {
			
			echo '<div class="hata">Mesajı silerken bir hata oluştu!</div>';
			
		}
		  
	  }else {
		  
		  
		  echo '<div class="hata">Yanlış bir mesajı silmeye çalıştınız...</div>';
		  
	  }
	   
   }


?>