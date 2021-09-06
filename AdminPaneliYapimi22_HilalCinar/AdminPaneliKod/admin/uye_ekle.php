<?php !defined("admin") ? die("hacking ?") : null;?>
<div class="admin-icerik-sag"> 
			<h2>Üye Ekle</h2>
			<?php 
			
			if($_POST){
				
				$adi          =  strip_tags($_POST["adi"]);
				$sifre        =  strip_tags($_POST["sifre"]);
				$eposta       =  strip_tags($_POST["eposta"]);
				$rutbe        =  $_POST["rutbe"];
				$hakkimda     =  strip_tags($_POST["hakkimda"]);
				$onay         =  $_POST["onay"];
				
				
				if(!$adi  || !$sifre || !$eposta){
					
					echo '<div class="hata">Gerekli alanları doldurmanız gerekiyor...</div>';
					
				}elseif (!filter_var($eposta,FILTER_VALIDATE_EMAIL)){
			  
			  
			  echo '<div class="hata">Bu mail adresi geçerli değil başka bir tane deneyin...</div>';
			  
		  } 
				
				
				else {
					
					$kontrol = $db->prepare("select * from uyeler where uye_adi=?");
					$kontrol->execute(array($adi));
					$c = $kontrol->fetch(PDO::FETCH_ASSOC);
					$x = $kontrol->rowCount();
					
					if($x){
						
					echo '<div class="hata"><span style="color:red;">'.$adi.'</span>
					 adında bir üye sistemde zaten kayıtlı başka bir tane deneyin...</div>';	
						
					}else{
						
						$sifre = md5($sifre);
					
					$ekle = $db->prepare("insert into uyeler set 
					
					      uye_adi         = ?,
						  uye_sifre       = ?,
						  uye_eposta      = ?,
						  uye_rutbe       = ?,
						  uye_hakkimda    = ?,
						  uye_onay        = ? 
					
					");
					
					$insert = $ekle->execute(
					array($adi,$sifre,$eposta,$rutbe,$hakkimda,$onay));
					
					if($insert){
						
						echo '<div class="basarili2">Üye başarıyla eklendi...</div>';
						
						header("refresh: 2; url=/admin/?do=uyeler");
						
					}else {
						
						echo '<div class="hata">Üye eklenirken bir hata oluştu...</div>';
						
					}
					}
				}
				
				
			}else {
				
				?>
				<div class="konular"> 
				<form action="" method="post">
				<ul> 
				<li>Adı</li>
				<li><input type="text" name="adi"  /></li>
				<li>Şifre</li>
				<li><input type="password" name="sifre"  /></li>
				<li>Eposta</li>
				<li><input type="text" name="eposta"  /></li>
				<li>Rütbe</li>
				<li><select name="rutbe" id=""> 
				<option value="0">Üye</option>
				<option value="1">Yönetici</option>
				</select></li>
				<li>Hakkımda</li>
				<li><textarea name="hakkimda" id="" cols="30" rows="10"> </textarea></li>
				<li><select name="onay" id=""> 
				<option value="1">Onaylı</option>
				<option value="0">Onaylı Değil</option>
				</select></li>
				<li><button type="submit">Konuyu Düzenle</button></li>
				</ul>
				</form>
				</div>
				<?php
				
			}
			
			?>
			</div>
			