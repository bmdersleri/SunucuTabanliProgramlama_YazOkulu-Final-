<?php !defined("index") ? die("hacking ?") : null;?>
<div class="sag4"> 
	<h2>Son Yorumlar</h2>
	
	<?php 
	
	$v = $db->prepare("select * from yorumlar where yorum_onay=? order by yorum_id desc limit 5");
	$v->execute(array(1));
	$y = $v->fetchALL(PDO::FETCH_ASSOC);
	$x = $v->rowCount();
	
	if($x){
		
		
		

	foreach($y as $m){
		
		echo '<h3><a href="?do=devam&id='.$m["yorum_konu_id"].'">
	
	 '.mb_substr($m["yorum_mesaj"],0,30).' <br/><span style="font-size:17px;">'.$m["yorum_ekleyen"].'</span></a></h3>';
		
		
	}
		}else{
			
			echo '<div class="hata">Hiç yorum yok...İlk yorumu siz yapın..:)</div>';
			
		}
	?>
	
	
	
	</div>