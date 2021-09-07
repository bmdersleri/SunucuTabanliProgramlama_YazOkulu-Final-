<?php !defined("admin") ? die("hacking ?") : null;?>
<div class="admin-icerik-sag"> 
			<h2>Sayfa Ekle</h2>
			<?php 
			
			if($_POST){
				
				$adi   =        trim(strip_tags($_POST["adi"]));
				$aciklama    =  trim(strip_tags($_POST["aciklama"]));
				
				
				
				if(!$adi || !$aciklama){
					
					echo '<div class="hata">Gerekli alanları doldurmanız gerekiyor...</div>';
					
				}else {
					
					$kontrol = $db->prepare("select * from sabit_sayfalar where sayfa_adi=?");
					$kontrol->execute(array($adi));
					$listele = $kontrol->fetch(PDO::FETCH_ASSOC);
					$x = $kontrol->rowCount();
					
					if($x){
					
					   echo '<div class="hata"><span style="color:red;">'.$adi.'</span> adında bir sayfa daha once açılmıs başka bir isimde deneyin...</div>';
					
					}else{
					$guncelle = $db->prepare("insert into sabit_sayfalar set 
					
					      sayfa_adi         = ?,
						  sayfa_aciklama    = ?
						  
					
					");
					
					$update = $guncelle->execute(
					array($adi,$aciklama));
					
					if($update){
						
						echo '<div class="basarili2">Sayfa başarıyla eklendi...</div>';
						
						header("refresh: 2; url=/admin/?do=sabit_sayfalar");
						
					}else {
						
						echo '<div class="hata">Sayfa eklenirken bir hata oluştu...</div>';
						
					}
					}
				// burda bitiyor..
				}
				
				
			}else {
				
				?>
				<div class="konular"> 
				<form action="" method="post">
				<ul> 
				<li>Sayfa Adı</li>
				<li><input type="text" name="adi"  /></li>
				<li>Açıklama</li>
				<li><textarea name="aciklama" id="" cols="30" rows="10"> </textarea></li>
				<li><button type="submit">Sayfa Ekle</button></li>
				</ul>
				</form>
				</div>
				<?php
				
			}
			
			?>
			</div>
			