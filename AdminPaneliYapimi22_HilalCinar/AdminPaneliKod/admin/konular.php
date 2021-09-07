<?php !defined("admin") ? die("hacking ?") : null;?>
<?php 

$v = $db->prepare("select * from konular inner join kategoriler on kategoriler.kategori_id = 

konular.konu_kategori order by konu_id desc limit 20");
$v->execute(array());
$k = $v->fetchALL(PDO::FETCH_ASSOC);
$x = $v->rowCount();



?>

<div class="admin-icerik-sag"> 
			<h2>Konular <span style="float:right;"><a href="/admin/?do=konu_ekle">Konu Ekle</a></span></h2>
			<div class="konular"> 
			<table cellspacing="0" cellpadding="0"> 
			<thead> 
			<tr> 
			<th width="600">Konu Başlıkları</th> <th width="300">Konu Kategorileri</th>
			<th width="200">Konu Onayları</th> <th width="250">Tarih</th>
			<th width="200">İşlemler</th>
			</tr>
			</thead>
			<?php 
			 if($x){
				
                foreach($k as $m){
					?>
					<tbody> 
					<tr> 
					<td><?php echo $m["konu_baslik"];?></td> <td><?php echo $m["kategori_adi"];?></td>
					<td> 
					<?php 
					
					if($m["konu_durum"] == 1){
						
						echo '<span style="color:green">Onaylı</span>';
						
					}else {
						
						echo '<span style="color:red">Onaylı Değil</span>';
						
					}
					
					?>
					
					</td>
					<td><?php echo $m["konu_tarih"];?></td> 
					<td><span style="margin-left:35px;">
					<a href="/admin/?do=konu_duzenle&id=<?php echo $m["konu_id"];?>">Düzenle</a></span> <span style="margin-left:10px;"><a onclick="return confirm('konuyu silmek istediğinize eminmisiniz..')" href="/admin/?do=konu_sil&id=<?php echo $m["konu_id"];?>">sil</a></span></td>
					</tr>
					</tbody>
					<?php
					
					
				}				
				 
			 }else {
				 
				echo '<tr><td colspan="5"><div class="hata">Eklenen bir konu yok...</div></td></tr>'; 
				 
			 }
			
			?>
			</table>
			</div>
			</div>