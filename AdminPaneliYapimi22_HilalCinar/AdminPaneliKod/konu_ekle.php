<?php !defined("index") ? die("hacking ?") : null;?>
<?php 

  
  if($_SESSION){
	  
	  if($_POST){
		
         $baslik = strip_tags(trim($_POST["baslik"]));
         $resim =  strip_tags(trim($_POST["resim"]));
         $kategori = $_POST["kategori"];
         $aciklama = strip_tags($_POST["aciklama"]);
		 
		 if(!$baslik || !$resim || !$aciklama){
			 
			 
			 echo '<div class="hata">Gerekli alanları doldurmalısınız!</div>';
			 
		 }elseif(strlen($baslik) > 45){
			 
			 echo '<div class="hata">Konu başlıgı 30 karakterden uzun olamaz!</div>';
			 
			 
		 }else {
			 
			 $v = $db->prepare("select * from konular where konu_baslik=?");
			 $v->execute(array($baslik));
			$x = $v->fetch(PDO::FETCH_ASSOC);
			$z = $v->rowCount();
			 
			 if($z){
				 
				 echo '<div class="hata">Böyle bir konudan daha once bahsedilmiş, başka bir konu deneyin...</div>';
				 
			 }else {
				 
				
              $x = $db->prepare("insert into konular set 
			             
						 konu_baslik=?,
						 konu_resim=?,
						 konu_kategori=?,
						 konu_aciklama=?,
						 konu_ekleyen=?
			  
			  
			  ");				
				
            $kayit = $x->execute(array($baslik,$resim,$kategori,$aciklama,$_SESSION["uye"]));				
				
              if($kayit){
				  
				  
				  echo '<div class="basarili2">Konu başarıyla eklendi, onaylandıktan sonra yayınlanacaktır...</div>';
				  
				  
			  }else {
				  
				  echo'<div class="hata">Konu eklerken bir hata oluştu...</div>';
				  
			  }
				
			 }
			 
		 }
		  
		  
	  }else {
		  
		 ?>
<div class="sol2">
    <h2>Konu Ekle</h2>
<form action="" method="post">	
	<ul>  
	<li>Başlık</li>
	<li><input type="text" name="baslik" /></li>
	<li>Konu Resim</li>
	<li><input type="text" name="resim" placeholder="resim kodunu girdin" /></li>
	<li>Kategori</li>
	<li>  
	<select name="kategori" id="">
	<?php 
	 $v = $db->prepare("select * from kategoriler");
	 $v->execute(array());
	 $x = $v->fetchALL(PDO::FETCH_ASSOC);
	 
	 foreach($x as $m){
		 
		 
		echo '<option value="'.$m["kategori_id"].'">'.$m["kategori_adi"].'</option>'; 
		 
	 }
	
	?>
	
	</select>
	
	</li>
	<li>Konu Açıklaması</li>
	<li><textarea name="aciklama" id="" cols="50" rows="10"></textarea></li>
	
	<li><button type="submit">Gönder</button></li>
	</ul>
	</form>
	</div>
         <?php		 
		  
	  }
	  
	  
  }else {
	  
	  echo '<div class="hata">Üye olmadan konu ekleyemezsiniz!</div>';
	  
  }
  


?>