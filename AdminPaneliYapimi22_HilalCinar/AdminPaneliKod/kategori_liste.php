<?php !defined("index") ? die("hacking ?") : null;?>	
<?php 
 $id = $_GET["id"];
 $konu = $db->prepare("select * from konular inner join kategoriler on 
 
 kategoriler.kategori_id = konular.konu_kategori where konu_kategori=? and konu_durum=?");
 $konu->execute(array($id,1));
$x =  $konu->fetchALL(PDO::FETCH_ASSOC);
$v = $konu->rowCount();


   if($v){
	   
	   foreach($x as $m){
		   
		// yorumlar
		$yorum = $db->prepare("select * from yorumlar where yorum_konu_id=? and yorum_onay=?");
		$yorum->execute(array($m["konu_id"],1));
		$yorum->fetchALL(PDO::FETCH_ASSOC);
		$x = $yorum->rowCount();   
		   
	
	?>
	<div class="sol2"> 
	<h2><?php echo $m["konu_baslik"];?></h2>
	<div class="bilgi">Kategori : <?php echo $m["kategori_adi"];?> Yazan : <?php echo $m["konu_ekleyen"];?> 
	Okunma : <?php echo $m["konu_hit"];?> Yorum: <?php echo $x;?>
	<span style="float:right;">Tarih: <?php echo $m["konu_tarih"];?></span></div>
	<div class="resim"> 
	<img src="<?php echo $m["konu_resim"];?>" alt="" />
	</div>
	<p> 

  <?php echo mb_substr($m["konu_aciklama"],0,300);?>.....
	</p>
	
	<div class="devam"> 
	<a href="?do=devam&id=<?php echo $m["konu_id"];?>">Devam</a>
	</div>
	<div style="clear:both;"></div>
	</div>
	<?php
	
}

	   
	   
   }else {
	   
	   
	   echo '<div class="hata">Bu kategoriye ait hiç konu bulunmuyor</div>';
	   
   }

?>	
	