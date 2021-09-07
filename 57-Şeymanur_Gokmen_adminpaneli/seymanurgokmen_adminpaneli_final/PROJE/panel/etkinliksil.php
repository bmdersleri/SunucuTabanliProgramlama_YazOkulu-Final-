<?php
 include "config.php";
 include "adminli_ust.php";
	
	if(isset($_GET['id'])){
			$id=$_GET['id'];
			$sorgu = "DELETE FROM etkinlikler WHERE id='".$id."'";
			if(mysqli_query($baglan, $sorgu)) {
			    echo '<p class="msg done">Etkinlik bilgileri siliniyor...</p>';
				header("Refresh:1; url=etkinlikduzenle.php");
			}
			else {echo " Bir hata oluştu ! İşlem gerçekleştirilemedi..";}
		}
	else{ echo "nothing..";}
 
 
include "adminli_alt.php";


?>