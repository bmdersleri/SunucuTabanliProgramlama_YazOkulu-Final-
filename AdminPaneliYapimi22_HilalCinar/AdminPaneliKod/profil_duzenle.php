<?php !defined("index") ? die("hacking ?") : null;?>

<?php 

  if($_SESSION){
	  
	  $uye = @$_GET["uye"];
	  if($_SESSION["uye"] == $uye){
		  
		$v = $db->prepare("select * from uyeler where uye_adi=?");
        $v->execute(array($uye));
		   $m = $v->fetch(PDO::FETCH_ASSOC);
		   $x = $v->rowcount(); 


       if($x){
		   
		   
		   if($_POST){
			   
			   $email = strip_tags (trim($_POST["email"]));
			   $sifre = strip_tags(trim($_POST["sifre"]));
			   $hakkimda = strip_tags(trim($_POST["hakkimda"]));
			   
			   if(!$email){
				   
				   echo '<div class="hata">Email adresi boş bırakılamaz!</div>';
				   
			   }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
			  
			  
			  echo '<div class="hata">Bu mail adresi geçerli değil, geçerli bir mail adresi deneyin!</div>';
			  
		  }else {
			  
			  if($sifre){
				  
				  $sifre = md5($sifre);
				  
			  }else {
				  
				  $sifre = $m["uye_sifre"];
				  
			  }
			  
			  $guncelle = $db->prepare("update uyeler set 
			  
			               uye_eposta=?,
						   uye_sifre=?,
						   uye_hakkimda=? where uye_adi=?
			  
			  ");
			
           $kayit =  $guncelle->execute(array($email,$sifre,$hakkimda,$_SESSION["uye"]));

           if($kayit){
			   
			   echo '<div class="basarili2">Profiliniz başarıyla güncellendi...</div>';
			   
			   header("refresh: 2; url=?do=profil&uye=$uye");
			   
		   }else {
			   
			   echo '<div class="hata">Profil güncellenirken bir hata oluştu!</div>';
			   
		   }		   
			  
		  }
			   
		   }else {
			   
			   ?>
			   <div class="sol2">
				<h2>Profil Düzenle</h2>	
				<form action="" method="post">
				<ul> 
				<li>Email</li>
				<li><input type="text" value="<?php echo $m["uye_eposta"];?>" name="email" /></li>
				<li>Şifre</li>
				<li><input type="text"   name="sifre" placeholder="yeni sifrenizi giriniz" /></li>
				<li>Hakkımda</li>
				<li><textarea name="hakkimda" id="" cols="50" rows="10"> <?php echo $m["uye_hakkimda"];?></textarea></li>
				
				<li><button type="submit">Profili Düzenle</button></li>
				</ul>
				</form>
				</div>
			   <?php
			   
			   
		   }
		   
		   
	   }else {
		   
		   echo '<div class="hata">Üye bulunamadı!</div>';
		   
	   }	   
		  
		  
		  
	  }else {
		  
		  
		  echo '<div class="hata">Yanlış bir yere girdiniz!</div>';
		  
		  die();
		  session_destroy();
		  
	  }
	  
	  
  }
 


?>