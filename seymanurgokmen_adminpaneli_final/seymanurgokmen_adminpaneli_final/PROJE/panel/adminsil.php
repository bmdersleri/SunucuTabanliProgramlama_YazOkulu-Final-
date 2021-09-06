<?php
 include "config.php";
 include "adminli_ust.php";
	
	if(isset($_GET['id'])){
			$id=$_GET['id'];
			$sorgu = "DELETE FROM kullanicilar WHERE id='".$id."'";
			if(mysqli_query($baglan, $sorgu)) {
			    echo '<p class="msg done">Hesabınız kapatılıyor..</p>';
				header("Refresh:5; url=kayit.php");
			}
			else {echo " Bir hata oluştu ! İşlem gerçekleştirilemedi..";}
		}
	else{ echo "nothing..";}
 
 
include "adminli_alt.php";


?>