<?php !defined("index") ? die("hacking ?") : null;?>
<?php 
 $id = $_GET["id"];
 $konu = $db->prepare("select * from konular inner join kategoriler on 

kategoriler.kategori_id = konular.konu_kategori where konu_id=? and konu_durum=?");
 $konu->execute(array($id,1));
$x =  $konu->fetchALL(PDO::FETCH_ASSOC);

// konu hit bolumu
if(!@$_COOKIE["hit".$id]){
 $hit = $db->prepare("update konular set konu_hit = konu_hit +1 where konu_id=?");
 $hit->execute(array($id));

 setcookie("hit".$id,"_",time ()+(60*60*24*30));
}
 
foreach($x as $m){
	
	$yorum = $db->prepare("select * from yorumlar where yorum_konu_id=? and yorum_onay=?");
	$yorum->execute(array($m["konu_id"],1));
	$yorum->fetchALL(PDO::FETCH_ASSOC);
	$x = $yorum->rowCount();
	
	?>
	<div class="sol2"> 
	<h2><?php echo $m["konu_baslik"];?></h2>
	<div class="bilgi">Kategori : <?php echo $m["kategori_adi"];?> Yazar : <?php echo $m["konu_ekleyen"];?> 
	Okunma : <?php echo $m["konu_hit"];?> Yorum: <?php echo $x;?> 
	<span style="float:right;">Tarih: <?php echo $m["konu_tarih"];?></span></div>
	
	<p> 
  <img src="<?php echo $m["konu_resim"];?>" alt="" />
  <?php echo nl2br($m["konu_aciklama"]);?>.....
	</p>
	
	
	<div style="clear:both;"></div>
	</div>
	<?php
	
}


 $yorum = $db->prepare("select * from yorumlar where yorum_konu_id=? and yorum_onay=?");
 $yorum->execute(array($id,1));
 $b = $yorum->fetchALL(PDO::FETCH_ASSOC);
 $x = $yorum->rowCount();
 
   if($x){
	   
     foreach($b as $m){
		 
		 ?>
		 <div class="yorumlar"> 
		 <h2>Ekleyen : <?php echo $m["yorum_ekleyen"];?> 
		 <span style="float:right;">Tarih: <?php echo $m["yorum_tarih"];?> </span></h2>
		 <p> 
		 <?php echo $m["yorum_mesaj"];?>
		 </p>
		 </div>
		 <?php
		 
		 
		 
	 }	  
	  
	   
   }else {
	   
	   echo '<div class="bilgi">Hiç yorum yok...İlk yorumu siz yapın..:)</div>';
	   
   }



if($_POST){
	
	$isim  = trim($_POST["isim"]);
	$mail  = trim($_POST["mail"]);
	$mesaj = $_POST["mesaj"];
	
	if(!$mesaj || !$mail || !$isim){
		
		echo '<div class="hata">Gerekli alanları doldurmanız gerekiyor...</div>';
		
	}else {
		
		$yorum = $db->prepare("insert into yorumlar set 
		
		          yorum_ekleyen=?,
				  yorum_eposta=?,
				  yorum_mesaj=?,
				  yorum_konu_id=?
		
		");
		
		$ekle = $yorum->execute(array($isim,$mail,$mesaj,$id));
		
		if($ekle){
			
			
			echo '<div class="basarili2">Yorumunuz başarıyla eklendi, onaylandıktan sonra yayınlanacaktır. Yönlendiriliyorsunuz...</div>';
			
			$url = $_SERVER["HTTP_REFERER"];
			
			header("refresh: 2; url=$url");
			
			
		}else {
			
			echo '<div class="hata">Yorumunuz eklenirken bir hata oluştu!</div>';
			
		}
	}
	
	
}else {
	
	if($_SESSION){
		
		?>
	<div style="font-size:19px;padding:10px;">Mesaj Goönder</div>
<div class="sol2">
   <form action="" method="post">
	<ul> 
	
	<li><input type="hidden"  value="<?php echo $_SESSION["uye"];?>" name="isim" /></li>
	
	<li><input type="hidden"  value="<?php echo $_SESSION["eposta"];?>" name="mail" /></li>
	
	
	<li><textarea name="mesaj" id="" cols="50" rows="10"></textarea></li>
	
	<li><button type="submit">Gönder</button></li>
	</ul>
	</form>
	</div>
	<?php
		
		
	}else {
		
		?>
	<div style="font-size:19px;padding:10px;">Mesaj Gönder</div>
<div class="sol2">
   <form action="" method="post">
	<ul> 
	<li>Adınız</li>
	<li><input type="text" name="isim" /></li>
	<li>Email</li>
	<li><input type="text" name="mail" /></li>
	
	
	<li><textarea name="mesaj" id="" cols="50" rows="10"></textarea></li>
	
	<li><button type="submit">Gönder</button></li>
	</ul>
	</form>
	</div>
	<?php
		
		
	}
	
	
	
}

?>




	