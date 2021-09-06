 <?php
 
 $id = $_GET["id"];
 
 $v = $db->prepare("select * from sabit_sayfalar where sayfa_id=?");
 $v->execute(array($id));
 $m = $v->fetch(PDO::FETCH_ASSOC);
 $x = $v->rowCount();
 
 ?>
 
			 
			 <div class="mesaj_oku">
             <h2><?php echo $m["sayfa_adi"];?> <span style="float:right;"> Tarih : <?php echo $m["sayfa_tarih"];?></span></h2>			 
			 <?php
			  if($x){
				  
				  echo '<p>'.nl2br($m["sayfa_aciklama"]).'</p>';
				  
			  }else{
				  
				echo '<div class="hata">Böyle bir sayfa bulunamadý!</div>';  
				  
			  }
			 ?>
			 </div>
			 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 