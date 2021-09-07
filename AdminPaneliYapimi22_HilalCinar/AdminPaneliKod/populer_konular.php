
<?php !defined("index") ? die("hacking ?") : null;?>
<div class="sag2"> 
	<h2>Popüler Konular</h2>
	
	<?php 
	
	$v = $db->prepare("select * from konular where konu_durum=? order by konu_hit desc limit 5");
	$v->execute(array(1));
	$pop = $v->fetchALL(PDO::FETCH_ASSOC);
	$x = $v->rowCount();
	
	if($x){
		
		foreach($pop as $m){
			
			echo '<h3><a href="?do=devam&id='.$m["konu_id"].'">'.$m["konu_baslik"].'</a></h3>';
			
		}
		
		
	
		
	}else {
		
		echo '<div class="hata">Popüler konu bulunmuyor</div>';
		
	}
	
	?>
	
	
	
	
	</div>