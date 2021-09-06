<?php !defined("admin") ? die("hacking ?") : null;?>
<div class="admin-icerik-sag"> 
			<h2>Kategori Ekle</h2>
			<?php 
			
			if($_POST){
				
				$adi   =        strip_tags($_POST["adi"]);
				$aciklama    =  strip_tags($_POST["aciklama"]);
				
				
				
				if(!$adi || !$aciklama){
					
					echo '<div class="hata">Gerekli alanları doldurmanız gerekiyor...</div>';
					
				}else {
					
					$kontrol = $db->prepare("select * from kategoriler where kategori_adi=?");
					$kontrol->execute(array($adi));
					$listele = $kontrol->fetch(PDO::FETCH_ASSOC);
					$x = $kontrol->rowCount();
					
					if($x){
					
					   echo '<div class="hata"><span style="color:red;">'.$adi.'</span> adında bir kategori daha once açılmıs başka bir kategori deneyin...</div>';
					
					}else{
					$guncelle = $db->prepare("insert into kategoriler set 
					
					      kategori_adi         = ?,
						  kategori_aciklama    = ?
						  
					
					");
					
					$update = $guncelle->execute(
					array($adi,$aciklama));
					
					if($update){
						
						echo '<div class="basarili2">Kategori başarıyla eklendi...</div>';
						
						header("refresh: 2; url=/admin/?do=kategoriler");
						
					}else {
						
						echo '<div class="hata">Kategori eklenirken bir hata oluştu...</div>';
						
					}
					}
				// burda bitiyor...
				}
				
				
			}else {
				
				?>
				<div class="konular"> 
				<form action="" method="post">
				<ul> 
				<li>Kategori Adi</li>
				<li><input type="text" name="adi"  /></li>
				<li>Açıklama</li>
				<li><textarea name="aciklama" id="" cols="30" rows="10"> </textarea></li>
				<li><button type="submit">Kategori Ekle</button></li>
				</ul>
				</form>
				</div>
				<?php
				
			}
			
			?>
			</div>
			