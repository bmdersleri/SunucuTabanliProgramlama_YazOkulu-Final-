<?php !defined("admin") ? die("hacking ?") : null;?>
<?php

$id = $_GET["id"];



?>

<div class="admin-icerik-sag"> 
			<h2>Konu Sil</h2>
			<div class="konular"> 
			<?php
			$v = $db->prepare("delete from konular where konu_id=?");
			$sil = $v->execute(array($id));
			if($sil){
				
				echo '<div class="basarili2">Konu başarıyla silindi, yönlendiriliyorsunuz...</div>';
				header("refresh: 2; url=/admin/?do=konular");
			}else {
				
				echo '<div class="hata">Konu silinirken bir hata oluştu...</div>';
				
			}
			?>
			</div>
			</div>