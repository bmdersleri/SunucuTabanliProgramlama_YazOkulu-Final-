<?php
 include "config.php";
 include "adminli_ust.php";
	
	if(isset($_GET['id'])){
			$id=$_GET['id'];
			$sorgu = "DELETE FROM koordinatorler WHERE id='".$id."'";
			if(mysqli_query($baglan, $sorgu)) {
			    echo '<p class="msg done">Kaydınız siliniyor..</p>';
				header("Refresh:1; url=koordinatorduzenle.php");
			}
			else {echo " Bir hata oluştu ! silinemedi..";}
		}
	else{ echo "nothing..";}
 
 
include "adminli_alt.php";


?>