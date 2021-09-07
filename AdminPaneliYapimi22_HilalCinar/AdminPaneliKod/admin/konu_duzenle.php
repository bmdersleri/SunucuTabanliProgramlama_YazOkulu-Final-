<?php !defined("admin") ? die("hacking ?") : null;?>
<?php 

$id = $_GET["id"];

$v = $db->prepare("select * from konular where konu_id=?");
$v->execute(array($id));

$m = $v->fetch(PDO::FETCH_ASSOC);

?>

<div class="admin-icerik-sag"> 
			<h2>Konu Düzenle</h2>
			<?php 
			
			if($_POST){
				
				$baslik   =  $_POST["baslik"];
				$resim    =  $_POST["resim"];
				$kategori =  $_POST["kategori"];
				$aciklama =  $_POST["aciklama"];
				$onay     =  $_POST["onay"];
				$ekleyen  =  $m["konu_ekleyen"];
				
				if(!$baslik || !$resim || !$aciklama){
					
					echo '<div class="hata">Gerekli alanları doldurmanız gerekiyor...</div>';
					
				}else {
					
					$guncelle = $db->prepare("update konular set 
					
					      konu_baslik   = ?,
						  konu_resim    = ?,
						  konu_kategori = ?,
						  konu_aciklama = ?,
						  konu_durum    = ?,
						  konu_ekleyen  = ? where konu_id =?
					
					");
					
					$update = $guncelle->execute(
					array($baslik,$resim,$kategori,$aciklama,$onay,$ekleyen,$id));
					
					if($update){
						
						echo '<div class="basarili2">Konu başarıyla guüncellendi...</div>';
						
						header("refresh: 2; url=/admin/?do=konular");
						
					}else {
						
						echo '<div class="hata">Konu eklenirken bir hata oluştu...</div>';
						
					}
				}
				
				
			}else {
				
				?>
				<div class="konular"> 
				<form action="" method="post">
				<ul> 
				<li>Başlık</li>
				<li><input type="text" name="baslik" value="<?php echo $m["konu_baslik"];?>" /></li>
				<li>Resim Kodu</li>
				<li><input type="text" name="resim" value="<?php echo $m["konu_resim"];?>" /></li>
				<li>Kategori</li>
				<li><select name="kategori" id=""> 
				<?php
				
				$b = $db->prepare("select * from kategoriler order by kategori_id desc");
				$b->execute(array());
				$c = $b->fetchALL(PDO::FETCH_ASSOC);
				
				foreach($c as $z){
					
					echo '<option value="'.$z["kategori_id"].'"';
					
					echo $m["konu_kategori"] == $z["kategori_id"] ? 'selected' : null;
					echo '>'.$z["kategori_adi"].'</option>';
					
				}
				
				?>
				
				</select></li>
				<li>Açıklama</li>
				<li><textarea name="aciklama" id="" cols="30" rows="10"><?php echo $m["konu_aciklama"];?> </textarea></li>
				<li><select name="onay" id=""> 
				<option value="1"<?php echo $m["konu_durum"] == 1 ? 'selected' : null;?>>Onaylı</option>
				<option value="0" <?php echo $m["konu_durum"] == 0 ? 'selected' : null;?> >Onaylı Değil</option>
				</select></li>
				<li><button type="submit">Konuyu Düzenle</button></li>
				</ul>
				</form>
				</div>
				<?php
				
			}
			
			?>
			</div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			