<?php !defined("admin") ? die("hacking ?") : null;?>
<?php 

$v = $db->prepare("select * from uyeler  order by uye_id desc limit 20");
$v->execute(array());
$k = $v->fetchALL(PDO::FETCH_ASSOC);
$x = $v->rowCount();



?>

<div class="admin-icerik-sag"> 
			<h2>Üyeler <span style="float:right;"><a href="/admin/?do=uye_ekle">Üye Ekle</a></span></h2>
			<div class="konular"> 
			<table cellspacing="0" cellpadding="0"> 
			<thead> 
			<tr> 
			<th width="600">Üye Adiı</th> <th width="300">Üye Eposta</th>
			<th width="200">Üye Onay</th> <th width="250">Tarih</th>
			<th width="200">İşlemler</th>
			</tr>
			</thead>
			<?php 
			 if($x){
				
                foreach($k as $m){
					?>
					<tbody> 
					<tr> 
					<td><?php echo $m["uye_adi"];?></td> <td><?php echo mb_substr($m["uye_eposta"],0,20);?></td>
					<td> 
					<?php 
					
					if($m["uye_onay"] == 1){
						
						echo '<span style="color:green">Onaylı</span>';
						
					}else {
						
						echo '<span style="color:red">Onaylı Değil</span>';
						
					}
					
					?>
					
					</td>
					<td><?php echo $m["uye_tarih"];?></td> 
					<td><span style="margin-left:35px;">
					<a href="/admin/?do=uye_duzenle&id=<?php echo $m["uye_id"];?>">Düzenle</a></span> <span style="margin-left:10px;"><a onclick="return confirm('uyeyi silmek istediğinize eminmisiniz..')" href="/admin/?do=uye_sil&id=<?php echo $m["uye_id"];?>">sil</a></span></td>
					</tr>
					</tbody>
					<?php
					
					
				}				
				 
			 }else {
				 
				echo '<tr><td colspan="5"><div class="hata">Henuz kayıtlı üye yok...</div></td></tr>'; 
				 
			 }
			
			?>
			</table>
			</div>
			</div>