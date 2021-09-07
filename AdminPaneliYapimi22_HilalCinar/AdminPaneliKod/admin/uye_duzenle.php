<?php !defined("admin") ? die("hacking ?") : null;?>
<?php 

$id = $_GET["id"];

$v = $db->prepare("select * from uyeler where uye_id=?");
$v->execute(array($id));

$m = $v->fetch(PDO::FETCH_ASSOC);

?>

<div class="admin-icerik-sag"> 
			<h2>Üye Düzenle</h2>
			<?php 
			
			if($_POST){
				
				$adi          =  $_POST["adi"];
				$sifre        =  $_POST["sifre"];
				$eposta       =  $_POST["eposta"];
				$rutbe        =  $_POST["rutbe"];
				$hakkimda     =  $_POST["hakkimda"];
				$onay         =  $_POST["onay"];
				
				if(!$adi ||  !$eposta){
					
					echo '<div class="hata">Gerekli alanları doldurmanız gerekiyor...</div>';
					
				}elseif (!filter_var($eposta,FILTER_VALIDATE_EMAIL)){
			  
			  
			  echo '<div class="hata">Bu mail adresi geçerli değil başka bir tane deneyin!</div>';
			  
		  } 
				
				else {
					
					if($sifre){
						
						$sifre = md5($sifre);
						
					}else{
						
						$sifre = $m["uye_sifre"];
						
					}
					
					
					
					$guncelle = $db->prepare("update uyeler set 
					
					      uye_adi         = ?,
						  uye_sifre       = ?,
						  uye_eposta      = ?,
						  uye_rutbe       = ?,
						  uye_hakkimda    = ?,
						  uye_onay        = ? where uye_id= ?
					");
					
					$update = $guncelle->execute(
					array($adi,$sifre,$eposta,$rutbe,$hakkimda,$onay,$id));
					
					if($update){
						
						echo '<div class="basarili2">Üye başarıyla güncellendi...</div>';
						
						header("refresh: 2; url=/admin/?do=uyeler");
						
					}else {
						
						echo '<div class="hata">Üye eklenirken bir hata oluştu...</div>';
						
					}
				}
				
				
			}else {
				
				?>
				<div class="konular"> 
				<form action="" method="post">
				<ul> 
				<li>Adı</li>
				<li><input type="text" name="adi" value="<?php echo $m["uye_adi"];?>" /></li>
				<li>Şifre</li>
				<li><input type="text" name="sifre" placeholder="yeni sifreyi girin" /></li>
				<li>Eposta</li>
				<li><input type="text" name="eposta" value="<?php echo $m["uye_eposta"];?>" /></li>
				<li>Rütbe</li>
				<li> 
				<select name="rutbe" id="">
				<option value="0" <?php echo $m["uye_rutbe"] == 0 ? 'selected' : null;?>>Üye</option>
				<option value="1" <?php echo $m["uye_rutbe"] == 1 ? 'selected' : null;?>>Yönetici</option>
				</select>
				</li>
				<li>Üye Hakkımda</li>
				<li><textarea name="hakkimda" id="" cols="30" rows="10"><?php echo $m["uye_hakkimda"];?> </textarea></li>
				<li><select name="onay" id=""> 
				<option value="1"<?php echo $m["uye_onay"] == 1 ? 'selected' : null;?>>Onaylı</option>
				<option value="0" <?php echo $m["uye_onay"] == 0 ? 'selected' : null;?> >Onaylı Değil</option>
				</select></li>
				<li><button type="submit">Üyeyi Düzenle</button></li>
				</ul>
				</form>
				</div>
				<?php
				
			}
			
			?>
			</div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			