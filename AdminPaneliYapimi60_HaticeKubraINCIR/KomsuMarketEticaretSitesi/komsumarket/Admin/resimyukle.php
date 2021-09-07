<?php

require_once 'islem/baglanti.php';


if(!empty($_FILES)){ #boş değilse 

	#resim yükleme işlemleri 
	$uploads_dir='resimler/cokluresim'; #yükleme adrei
	@$tmp_name=$_FILES['file']["tmp_name"]; #yüklenen dosyanın geçici adıdır.
	@$name=$_FILES['file']["name"];  #yüklenen dosyanın gerçek adıdır.


	# resim isimlerinde benzersizlik olması için
	$sayi1=random_int(1,1000000);
	$sayi2=random_int(1,1000000);
	$sayi3=random_int(10000,20000000);

	$sayilar=$sayi1.$sayi2.$sayi3;
	$resimyolu=$sayilar.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name"); #resimin belirtilen adrese yüklenmesi 

	# veritabanına ekleme 
	$resimkaydet=$baglanti->prepare("INSERT cokluresim  SET 

			resim=:resim,
			urun_id=:urun_id
				
	");

	$insert=$resimkaydet->execute(array(

			'resim'=>$resimyolu,
			'urun_id'=>$_POST['id']
			
	));

 }



 ?>