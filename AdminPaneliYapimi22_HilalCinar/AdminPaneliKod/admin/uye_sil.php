<?php !defined("admin") ? die("hacking ?") : null;?>
<?php

$id = $_GET["id"];



?>

<div class="admin-icerik-sag"> 
			<h2>Üye Sil</h2>
			<div class="konular"> 
			<?php
			$v = $db->prepare("delete from uyeler where uye_id=?");
			$sil = $v->execute(array($id));
			if($sil){
				
				echo '<div class="basarili2">Üye başarıyla silindi yönlendiriliyorsunuz...</div>';
				header("refresh: 2; url=/admin/?do=uyeler");
			}else {
				
				echo '<div class="hata">Üye silinirken bir hata oluştu...</div>';
				
			}
			?>
			</div>
			</div>