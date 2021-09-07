<?php !defined("admin") ? die("hacking ?") : null;?>
<?php

$id = $_GET["id"];



?>

<div class="admin-icerik-sag"> 
			<h2>Kategori Sil</h2>
			<div class="konular"> 
			<?php
			$v = $db->prepare("delete from kategoriler where kategori_id=?");
			$sil = $v->execute(array($id));
			if($sil){
				
				echo '<div class="basarili2">Kategori başarıyla silindi yönlendiriliyorsunuz...</div>';
				header("refresh: 2; url=/admin/?do=kategoriler");
			}else {
				
				echo '<div class="hata">kategori silinirken bir hata oluştu!</div>';
				
			}
			?>
			</div>
			</div>