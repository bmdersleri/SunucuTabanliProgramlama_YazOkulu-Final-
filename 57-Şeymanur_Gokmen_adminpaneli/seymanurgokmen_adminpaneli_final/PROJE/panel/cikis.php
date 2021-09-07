	<?php
	session_start();
	
	$_SESSION=array();
	session_destroy();
	echo "Çıkış yapılıyor, Lütfen bekleyiniz...";
    header("Refresh:2; url=giris.php");
	
	?>