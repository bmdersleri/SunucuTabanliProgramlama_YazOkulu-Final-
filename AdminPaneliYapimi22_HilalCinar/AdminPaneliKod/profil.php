<?php !defined("index") ? die("hacking ?") : null;?>
<?php 

  
  if($_SESSION){
	  
	  $uye = @$_GET["uye"];
	  
	  $v = $db->prepare("select * from uyeler where uye_adi=?");
	  $v->execute(array($uye));
	 $m =  $v->fetch(PDO::FETCH_ASSOC);
	 $x = $v->rowCount();
	  
	  if($x){
		  
		  ?>
		  <div class="profil"> 
		  <h2>Profil Bölümü 
		  <?php 
		  
		  if($_SESSION["uye"] == $uye){
			  
			  
			  echo '<span style="float:right;"><a href="?do=profil_duzenle&uye='.$_SESSION["uye"].'">duzenle</a></span>';
			  
		  }
		  
		  
		  ?>
		  
		  </h2>
		  <ul> 
		  <li><span style="font-weight:bold;">Üye Adı : </span><?php echo $m["uye_adi"];?></li>
		  <li><span style="font-weight:bold;">Üye Eposta : </span><?php echo $m["uye_eposta"];?></li>
		  
		  <li><span style="font-weight:bold;">Kayıt Tarihi : </span><?php echo $m["uye_tarih"];?></li>
		  </ul>
		  </div>
		  <?php
		  
		  
	  }else {
		  
		  echo '<div class="hata">Böyle bir üye sistemde kayıtlı gözükmüyor!</div>';
		  
	  }
	  
	  
	  
  }else {
	  
	  echo '<div class="hata">Üye olmadan profil bölümünü goremezsiniz!</div>';
	  
  }


?>