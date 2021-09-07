<?php 

session_start(); #session başlat

require_once 'baglanti.php';

if(isset($_POST['ayarkaydet'])){ #ayarkaydet ile gelen degerlerin işlemleri

	$duzenle=$baglanti->prepare("UPDATE ayarlar SET 
		baslik=:baslik,
		aciklama=:aciklama,
		anahtarkelime=:anahtarkelime

	WHERE id=1

	 ");

	$update=$duzenle->execute(array(
		'baslik'=>$_POST['baslik'],
		'aciklama'=>$_POST['aciklama'],
		'anahtarkelime'=>$_POST['anahtarkelime']

	));

	if($update){
		header("Location:../ayarlar.php?yuklenme=basarili"); # güncelleme sonrası lokasyon 
	}
	else{
		header("Location:../ayarlar.php?yuklenme=basarisiz");
			
	  }

}

if(isset($_POST['iletisimkaydet'])){ #iletisimkaydet ile gelen degerlerin işlemleri

	$duzenle=$baglanti->prepare("UPDATE ayarlar SET 
		telefon=:telefon,
		adres=:adres,
		email=:email,
		mesai=:mesai

	WHERE id=1

	 ");

	$update=$duzenle->execute(array(
		'telefon'=>$_POST['telefon'],
		'adres'=>$_POST['adres'],
		'email'=>$_POST['email'],
		'mesai'=>$_POST['mesai']

	));

	if($update){
		header("Location:../iletisim.php?yuklenme=basarili"); # güncelleme sonrası lokasyon 
	}
	else{
		header("Location:../iletisim.php?yuklenme=basarisiz");
	  }

}

if(isset($_POST['sosyalmedyakaydet'])){ #sosyalmedyakaydet ile gelen degerlerin işlemleri

	$duzenle=$baglanti->prepare("UPDATE ayarlar SET 
		facebook=:facebook,
		instagram=:instagram,
		youtube=:youtube,
		twitter=:twitter

	WHERE id=1

	 ");

	$update=$duzenle->execute(array(
		'facebook'=>$_POST['facebook'],
		'instagram'=>$_POST['instagram'],
		'youtube'=>$_POST['youtube'],
		'twitter'=>$_POST['twitter']

	));

	if($update){
		header("Location:../sosyalmedya.php?yuklenme=basarili"); # güncelleme sonrası lokasyon 
	}
	else
	{
		header("Location:../sosyalmedya.php?yuklenme=basarisiz");
	}

}

 
if(isset($_POST['logokaydet'])){#logokaydet ile gelen degerlerin işlemleri

	$uploads_dir='../resimler/logo'; #yükleme adrei
	@$tmp_name=$_FILES['logo']["tmp_name"]; #logo isimli yüklenen dosyanın geçici adıdır.
	@$name=$_FILES['logo']["name"];  #logo isimli yüklenen dosyanın gerçek adıdır.


	#resim isimlerinde benzersizlik olması için
	$sayi1=random_int(1,1000000);
	$sayi2=random_int(1,1000000);
	$sayi3=random_int(10000,20000000);

	$sayilar=$sayi1.$sayi2.$sayi3;
	$resimyolu=$sayilar.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name"); #resimin belirtilen adrese yüklenmesi 
	

	#veritabanı kaydetme işlemleri
	$duzenle=$baglanti->prepare("UPDATE ayarlar SET 
		logo=:logo
		

	WHERE id=1

	 ");

	$update=$duzenle->execute(array(
		'logo'=>$resimyolu
		
	));

	if($update){
		$resimsil=$_POST['eskilogo']; #silinecek resim 
		unlink("../resimler/logo/$resimsil"); #konumdaki resim dosyası silinir

		header("Location:../ayarlar.php?yuklenme=basarili"); # güncelleme sonrası lokasyon 
	}
	else
	{
		header("Location:../ayarlar.php?yuklenme=basarisiz");			
	}

}


if(isset($_POST['hakkimizdakaydet'])){ #hakkimizdakaydet ile gelen degerlerin işlemleri
 

  if($_FILES['resim'] ['size']>0){  // resmin degeri geldi ise resim klasöre eklenir, sonra veritabanı işlemleri yapılır

	$uploads_dir='../resimler/hakkimizda'; #yükleme adresi
	@$tmp_name=$_FILES['resim']["tmp_name"]; #logo isimli yüklenen dosyanın geçici adıdır.
	@$name=$_FILES['resim']["name"];  #logo isimli yüklenen dosyanın gerçek adıdır.

	
	$sayi1=random_int(1,1000000);
	$sayi2=random_int(1,1000000);
	$sayi3=random_int(10000,20000000);

	$sayilar=$sayi1.$sayi2.$sayi3;
	$resimyolu=$sayilar.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name"); #resimin belirtilen adrese yüklenmesi 

	$duzenle=$baglanti->prepare("UPDATE hakkimizda SET 

		hakkimizda_baslik=:hakkimizda_baslik,
		hakkimizda_detay=:hakkimizda_detay,
		hakkimizda_misyon=:hakkimizda_misyon,
		hakkimizda_vizyon=:hakkimizda_vizyon,
		hakkimizda_resim=:hakkimizda_resim

	WHERE hakkimizda_id=1

	 ");

	$update=$duzenle->execute(array(
		'hakkimizda_baslik'=>$_POST['baslik'],
		'hakkimizda_detay'=>$_POST['aciklama'],
		'hakkimizda_misyon'=>$_POST['misyon'],
		'hakkimizda_vizyon'=>$_POST['vizyon'],
		'hakkimizda_resim'=>$resimyolu

	));

	if($update){
		header("Location:../hakkimizda.php?yuklenme=basarili"); # güncelleme sonrası lokasyon 
	}
	else
	{
		header("Location:../hakkimizda.php?yuklenme=basarisiz");			
	}

   }

  else // resmin degeri gelmediğinde ise sadece bilgiler veritabanına eklenir
  { 
	$duzenle=$baglanti->prepare("UPDATE hakkimizda SET 

		hakkimizda_baslik=:hakkimizda_baslik,
		hakkimizda_detay=:hakkimizda_detay,
		hakkimizda_misyon=:hakkimizda_misyon,
		hakkimizda_vizyon=:hakkimizda_vizyon
		

	WHERE hakkimizda_id=1

	 ");

	$update=$duzenle->execute(array(
		'hakkimizda_baslik'=>$_POST['baslik'],
		'hakkimizda_detay'=>$_POST['aciklama'],
		'hakkimizda_misyon'=>$_POST['misyon'],
		'hakkimizda_vizyon'=>$_POST['vizyon']
		

	));

	if($update){
		$resimsil=$_POST['eskiresim']; #silinecek eski resim 
		unlink("../resimler/hakkimizda/$resimsil"); #konumdaki resim dosyası silinir
		header("Location:../hakkimizda.php?yuklenme=basarili"); # güncelleme sonrası lokasyon 
	}
	else
	{
		header("Location:../hakkimizda.php?yuklenme=basarisiz");
		
    }
  }
 
}



if(isset($_POST['girisyap'])){ #girisyap (login) ile gelen degerlerin işlemleri
	
	$kadi=htmlspecialchars($_POST['kadi']);
	$sifre=htmlspecialchars($_POST['sifre']);
	$sifreguclu=md5($sifre);  #md5 ile güçlendirme
	#echo $sifreguclu;


	$kullanicisorgu=$baglanti->prepare("SELECT * from kullanici where kullanici_adi=:kullanici_adi and kullanici_sifre=:kullanici_sifre and kullanici_yetki=:kullanici_yetki");

	$kullanicisorgu->execute(array(
		'kullanici_adi'=>$kadi,
		'kullanici_sifre'=>$sifreguclu,
		'kullanici_yetki'=>2 #kullanıcı yetkisi 1 olan normal kullanıcı 


	));

	$varmi=$kullanicisorgu->rowCount(); //kullanici var mı sayac

	if($varmi >0)
	{
		$_SESSION['girisbelgesi']=$kadi; #session'a kullanıcı adı atanır
		header("Location:../index?durum=hosgeldin"); #doğru girişlerde -> index
		
	}
	else
	{
		header("Location:../login?durum=hata"); #yanlış girişlerde -> login
	}



	/* echo $kadi; 
	echo "</br>"; 
	echo $sifreguclu; */

}



if(isset($_POST['uyelerkaydet'])){ #uyelerkaydet (admin uye ekleme) ile gelen degerlerin işlemleri

	$kadi=htmlspecialchars($_POST['kadi']);  //kullanıcı adı,şifre,adsoyad güvenli bir şekilde alınır
	$sifre=htmlspecialchars($_POST['sifre']);
	$adsoyad=htmlspecialchars($_POST['adsoyad']);
	$sifreguclu=md5($sifre);  #md5 ile güçlendirme


	//### kullanıcı_adi ile daha önceden kayıt var mı kontrolü ###
	$kullanicisorgu=$baglanti->prepare("SELECT * from kullanici where kullanici_adi=:kullanici_adi and kullanici_yetki=:kullanici_yetki");

	$kullanicisorgu->execute(array(
		'kullanici_adi'=>$kadi,
		'kullanici_yetki'=>2

	));
	$varmi=$kullanicisorgu->rowCount(); //kullanici var mı sayac
	if($varmi>0){ header("Location:../uyelerekle?yuklenme=kullanicivar");} #varsa yönlendirme yapılır
	
	else{ #yoksa ekleme yapılır
		echo "yok";


		//### resmin degeri geldi ise resim işlemleri yapılır ve klasöre eklenir ###
		$uploads_dir='../resimler/kullanici'; #yükleme adresi
		@$tmp_name=$_FILES['resim']["tmp_name"]; # yüklenen dosyanın geçici adıdır.
		@$name=$_FILES['resim']["name"];  # yüklenen dosyanın gerçek adıdır.

	
		$sayi1=random_int(1,1000000);
		$sayi2=random_int(1,1000000);
		$sayi3=random_int(10000,20000000);

		$sayilar=$sayi1.$sayi2.$sayi3;
		$resimyolu=$sayilar.$name;

		@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name"); #resimin belirtilen adrese yüklenmesi 




		//### kullanıcı veritabanına ekleme ###
		
		$Kullanicikaydet=$baglanti->prepare("INSERT into kullanici SET 

			kullanici_adi=:kullanici_adi,
			kullanici_sifre=:kullanici_sifre,
			kullanici_adsoyad=:kullanici_adsoyad,
			kullanici_yetki=:kullanici_yetki,
			kullanici_resim=:kullanici_resim
				

		 ");

		$insert=$Kullanicikaydet->execute(array(

			'kullanici_adi'=>$kadi,
			'kullanici_sifre'=>$sifreguclu,
			'kullanici_adsoyad'=>$adsoyad,
			'kullanici_yetki'=>2,
			'kullanici_resim'=>$resimyolu
			
		));

		if($insert){		
			header("Location:../uyeler?yuklenme=basarili"); # güncelleme sonrası lokasyon 
		}
		else
		{
			header("Location:../uyeler?yuklenme=basarisiz");
			   
	  }
  }
}

if (isset($_GET['kullanicisil'])) {  #kullanici silme işlemleri 

	$kullanicisil=$baglanti->prepare("DELETE from kullanici where kullanici_id=:kullanici_id");

	$kullanicisil->execute(array('kullanici_id'=>$_GET['id'])); //gelen id degerine göre silme işlemi

	if($kullanicisil)
	{
		header("Location:../uyeler?durum=basarili");
	}
	else
	{ header("Location:../uyeler?durum=hata"); }

	
}

if (isset($_POST['kategorikaydet'])) { #kategori kaydetme işlemleri 

		$kategorikaydet=$baglanti->prepare("INSERT into kategori SET 

			kategori_adi=:kategori_adi,
			kategori_sira=:kategori_sira,
			kategori_durum=:kategori_durum
				

		 ");

		$insert=$kategorikaydet->execute(array(

			'kategori_adi'=>$_POST['kategoriadi'],
			'kategori_sira'=>$_POST['sira'],
			'kategori_durum'=>$_POST['kategoridurum']
			
		));

		if($insert){		
			header("Location:../kategori?yuklenme=basarili"); # güncelleme sonrası lokasyon 
		}
		else
		{
			header("Location:../kategori?yuklenme=basarisiz");
			   
	  }
	
}
if (isset($_POST['kategoriduzenle'])) {  #kategori düzenleme işlemleri 

	$kategori_id=$_POST['kategori_id'];

	$duzenle=$baglanti->prepare("UPDATE kategori SET 

		kategori_adi=:kategori_adi,
		kategori_sira=:kategori_sira,
		kategori_durum=:kategori_durum
				
	WHERE kategori_id=$kategori_id #gelen kategori_id degerine göre güncelleme

	 ");

	$update=$duzenle->execute(array(

		'kategori_adi'=>$_POST['kategoriadi'],
		'kategori_sira'=>$_POST['sira'],
		'kategori_durum'=>$_POST['kategoridurum']
	));

	if($update){
		header("Location:../kategori.php?yuklenme=basarili"); # güncelleme sonrası lokasyon 
	}
	else{
		header("Location:../kategori.php?yuklenme=basarisiz");

			
	  }
}



if (isset($_GET['kategorisil'])) {  #kategori silme işlemleri 

	$kategorisil=$baglanti->prepare("DELETE from kategori where kategori_id=:kategori_id");

	$kategorisil->execute(array('kategori_id'=>$_GET['id'])); //gelen id degerine göre silme işlemi

	if($kategorisil)
	{
		header("Location:../kategori?yuklenme=basarili");
	}
	else
	{ header("Location:../kategori?yuklenme=hata"); }

	
}


if (isset($_POST['sliderkaydet'])) { #slider kaydetme işlemleri 

		$uploads_dir='../resimler/slider'; #yükleme adresi
		@$tmp_name=$_FILES['sliderresim']["tmp_name"]; # yüklenen dosyanın geçici adıdır.
		@$name=$_FILES['sliderresim']["name"];  # yüklenen dosyanın gerçek adıdır.

	
		$sayi1=random_int(1,1000000);
		$sayi2=random_int(1,1000000);
		$sayi3=random_int(10000,20000000);

		$sayilar=$sayi1.$sayi2.$sayi3;
		$resimyolu=$sayilar.$name;

		@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name"); #resimin belirtilen adrese yüklenmesi 


		$sliderkaydet=$baglanti->prepare("INSERT into slider SET 

			slider_baslik=:slider_baslik,
			slider_aciklama=:slider_aciklama,
			slider_link=:slider_link,
			slider_button=:slider_button,
			slider_resim=:slider_resim,
			slider_sira=:slider_sira,
			slider_durum=:slider_durum,
			slider_banner=:slider_banner
				

		 ");

		$insert=$sliderkaydet->execute(array(

			'slider_baslik'=>$_POST['sliderbaslik'],
			'slider_aciklama'=>$_POST['slideraciklama'],
			'slider_link'=>$_POST['sliderlink'],
			'slider_button'=>$_POST['sliderbutton'],
			'slider_resim'=>$resimyolu,
			'slider_sira'=>$_POST['slidersira'],
			'slider_durum'=>$_POST['sliderdurum'],
			'slider_banner'=>$_POST['sliderbanner']
			
		));

		if($insert){		
			header("Location:../slider?yuklenme=basarili"); # güncelleme sonrası lokasyon 
		}
		else
		{
			header("Location:../slider?yuklenme=basarisiz");
			   
	  }
	
}

if (isset($_POST['sliderduzenle'])) {  #slider düzenleme işlemleri 

	$slider_id=$_POST['id']; #gelen id (url)
	if($_FILES['sliderresim'] ['size']>0){ //resimli düzenleme kodları
		$uploads_dir='../resimler/slider'; #yükleme adresi
	  @$tmp_name=$_FILES['sliderresim']["tmp_name"]; # yüklenen dosyanın geçici adıdır.
	  @$name=$_FILES['sliderresim']["name"];  # yüklenen dosyanın gerçek adıdır.

	
		$sayi1=random_int(1,1000000);
		$sayi2=random_int(1,1000000);
		$sayi3=random_int(10000,20000000);

		$sayilar=$sayi1.$sayi2.$sayi3;
		$resimyolu=$sayilar.$name;

  	@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name"); #resimin belirtilen adrese yüklenmesi 



	  $duzenle=$baglanti->prepare("UPDATE slider SET 

		 slider_baslik=:slider_baslik,
		 slider_aciklama=:slider_aciklama,
		 slider_link=:slider_link,
		 slider_button=:slider_link,
		 slider_resim=:slider_resim,
		 slider_sira=:slider_sira,
		 slider_durum=:slider_durum,
		 slider_banner=:slider_banner
				
				
	  WHERE slider_id=$slider_id #gelen kategori_id degerine göre güncelleme

	   ");

	  $update=$duzenle->execute(array(

		 'slider_baslik'=>$_POST['sliderbaslik'],
		 'slider_aciklama'=>$_POST['slideraciklama'],
		 'slider_link'=>$_POST['sliderlink'],
		 'slider_button'=>$_POST['sliderbutton'],
		 'slider_sira'=>$_POST['slidersira'],
		 'slider_durum'=>$_POST['sliderdurum'],
		 'slider_banner'=>$_POST['sliderbanner'],
		 'slider_resim'=>$resimyolu
			
	  ));

	  if($update){

	  	$resimsil=$_POST['eskiresim'];
	  	unlink("../resimler/slider/$resimsil");

		  header("Location:../slider.php?yuklenme=basarili"); # güncelleme sonrası lokasyon 
	   }
	  else{
		  header("Location:../slider.php?yuklenme=basarisiz");
	   }
   }


   else{ //resimsiz düzenleme kodları

	  $duzenle=$baglanti->prepare("UPDATE slider SET 

		 slider_baslik=:slider_baslik,
		 slider_aciklama=:slider_aciklama,
		 slider_link=:slider_link,
		 slider_button=:slider_link,
		 slider_sira=:slider_sira,
		 slider_durum=:slider_durum,
		 slider_banner=:slider_banner
				
				
	  WHERE slider_id=$slider_id #gelen slider_id degerine göre güncelleme

	   ");

	  $update=$duzenle->execute(array(

		 'slider_baslik'=>$_POST['sliderbaslik'],
		 'slider_aciklama'=>$_POST['slideraciklama'],
		 'slider_link'=>$_POST['sliderlink'],
		 'slider_button'=>$_POST['sliderbutton'],
		 'slider_sira'=>$_POST['slidersira'],
		 'slider_durum'=>$_POST['sliderdurum'],
		 'slider_banner'=>$_POST['sliderbanner']
		 
			
	  ));

	  if($update){
		  header("Location:../slider.php?yuklenme=basarili"); # güncelleme sonrası lokasyon 
	   }
	  else{
		  header("Location:../slider.php?yuklenme=basarisiz");
	   }
   }
}



if (isset($_POST['slidersil'])) {  #slider silme işlemleri 

	$slidersil=$baglanti->prepare("DELETE from slider where slider_id=:slider_id");

	$slidersil->execute(array('slider_id'=>$_POST['id'])); //gelen id degerine göre silme işlemi

	if($slidersil)
	{
		$resimsil=$_POST['resim'];
	  unlink("../resimler/slider/$resimsil");
		header("Location:../slider?yuklenme=basarili");
	}
	else
	{ header("Location:../slider?yuklenme=hata"); }

	
}



if (isset($_POST['urunlerkaydet'])) { #urunler kaydetme işlemleri 

	  $gelenkategori_id=$_POST['katid'];

		$uploads_dir='../resimler/urunler'; #yükleme adresi
		@$tmp_name=$_FILES['urunlerresim']["tmp_name"]; # yüklenen dosyanın geçici adıdır.
		@$name=$_FILES['urunlerresim']["name"];  # yüklenen dosyanın gerçek adıdır.

	
		$sayi1=random_int(1,1000000);
		$sayi2=random_int(1,1000000);
		$sayi3=random_int(10000,20000000);

		$sayilar=$sayi1.$sayi2.$sayi3;
		$resimyolu=$sayilar.$name;

		@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name"); #resimin belirtilen adrese yüklenmesi 


		$urunlerkaydet=$baglanti->prepare("INSERT into urunler SET 

			kategori_id=:kategori_id,
			urun_baslik=:urun_baslik,
			urun_aciklama=:urun_aciklama,
			urun_sira=:urun_sira,
			urun_model=:urun_model,
			urun_renk=:urun_renk,
			urun_adet=:urun_adet,
			urun_fiyat=:urun_fiyat,
			urun_etiket=:urun_etiket,
			urun_durum=:urun_durum,
			onecikan=:onecikan,
			urun_resim=:urun_resim			
				
		 ");

		$insert=$urunlerkaydet->execute(array(

			'kategori_id'=>$_POST['urunkategori'],
			'urun_baslik'=>$_POST['urunlerbaslik'],
			'urun_aciklama'=>$_POST['urunleraciklama'],
			'urun_sira'=>$_POST['urunlersira'],
			'urun_model'=>$_POST['urunlermodel'],
			'urun_renk'=>$_POST['urunlerrenk'],
			'urun_adet'=>$_POST['urunleradet'],
			'urun_fiyat'=>$_POST['urunlerfiyat'],		
			'urun_etiket'=>$_POST['urunleranahtar'],
			'urun_durum'=>$_POST['urunlerdurum'],
			'onecikan'=>$_POST['urunleronecikar'],
			'urun_resim'=>$resimyolu
			
			
			
		));

		if($insert){		
			header("Location:../urunler?katid=$gelenkategori_id&yuklenme=basarili"); # kayıt yapıldıktan sonraki lokasyon 
		}
		else
		{
			header("Location:../urunler?katid=$gelenkategori_id&yuklenme=basarisiz"); # kayıt yapılmadığındaki lokasyon
			   
	  }
	
}

if (isset($_POST['urunduzenle'])) {  #urun düzenleme işlemleri 

  $gelenkategori_id=$_POST['katid'];
	$urun_id=$_POST['id']; #gelen id (url)

	if($_FILES['urunlerresim'] ['size']>0){ //resimli düzenleme kodları
		$uploads_dir='../resimler/urunler'; #yükleme adresi
	  @$tmp_name=$_FILES['urunlerresim']["tmp_name"]; # yüklenen dosyanın geçici adıdır.
	  @$name=$_FILES['urunlerresim']["name"];  # yüklenen dosyanın gerçek adıdır.

	
		$sayi1=random_int(1,1000000);
		$sayi2=random_int(1,1000000);
		$sayi3=random_int(10000,20000000);

		$sayilar=$sayi1.$sayi2.$sayi3;
		$resimyolu=$sayilar.$name;

  	@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name"); #resimin belirtilen adrese yüklenmesi 



	  $duzenle=$baglanti->prepare("UPDATE urunler SET 

	  	kategori_id=:kategori_id,
			urun_baslik=:urun_baslik,
			urun_aciklama=:urun_aciklama,
			urun_sira=:urun_sira,
			urun_model=:urun_model,
			urun_renk=:urun_renk,
			urun_adet=:urun_adet,
			urun_fiyat=:urun_fiyat,
			urun_etiket=:urun_etiket,
			urun_durum=:urun_durum,
			onecikan=:onecikan,
			urun_resim=:urun_resim			
				
				
	  WHERE urun_id=$urun_id #gelen kategori_id degerine göre güncelleme

	   ");

	  $update=$duzenle->execute(array(

	  	'kategori_id'=>$_POST['urunkategori'],
			'urun_baslik'=>$_POST['urunlerbaslik'],
			'urun_aciklama'=>$_POST['urunleraciklama'],
			'urun_sira'=>$_POST['urunlersira'],
			'urun_model'=>$_POST['urunlermodel'],
			'urun_renk'=>$_POST['urunlerrenk'],
			'urun_adet'=>$_POST['urunleradet'],
			'urun_fiyat'=>$_POST['urunlerfiyat'],		
			'urun_etiket'=>$_POST['urunleranahtar'],
			'urun_durum'=>$_POST['urunlerdurum'],
			'onecikan'=>$_POST['urunleronecikar'],
			'urun_resim'=>$resimyolu
			
	  ));

	  if($update){

	  	$resimsil=$_POST['eskiresim'];
	  	unlink("../resimler/urunler/$resimsil");

		  header("Location:../urunler?katid=$gelenkategori_id&yuklenme=basarili");# güncelleme sonrası lokasyon 
	   }
	  else{
		  hheader("Location:../urunler?katid=$gelenkategori_id&yuklenme=basarisiz");
	   }
   }


   else{ //resimsiz düzenleme kodları

	  $duzenle=$baglanti->prepare("UPDATE urunler SET 

		 kategori_id=:kategori_id,
			urun_baslik=:urun_baslik,
			urun_aciklama=:urun_aciklama,
			urun_sira=:urun_sira,
			urun_model=:urun_model,
			urun_renk=:urun_renk,
			urun_adet=:urun_adet,
			urun_fiyat=:urun_fiyat,
			urun_etiket=:urun_etiket,
			urun_durum=:urun_durum,
			onecikan=:onecikan
				
				
	  WHERE urun_id=$urun_id #gelen slider_id degerine göre güncelleme

	   ");

	  $update=$duzenle->execute(array(

	    'kategori_id'=>$_POST['urunkategori'],
			'urun_baslik'=>$_POST['urunlerbaslik'],
			'urun_aciklama'=>$_POST['urunleraciklama'],
			'urun_sira'=>$_POST['urunlersira'],
			'urun_model'=>$_POST['urunlermodel'],
			'urun_renk'=>$_POST['urunlerrenk'],
			'urun_adet'=>$_POST['urunleradet'],
			'urun_fiyat'=>$_POST['urunlerfiyat'],		
			'urun_etiket'=>$_POST['urunleranahtar'],
			'urun_durum'=>$_POST['urunlerdurum'],
			'onecikan'=>$_POST['urunleronecikar']
		 
			
	  ));

	  if($update){
		  header("Location:../urunler?katid=$gelenkategori_id&yuklenme=basarili"); # güncelleme sonrası lokasyon 
	   }
	  else{
		  header("Location:../urunler?katid=$gelenkategori_id&yuklenme=basarisiz");
	   }
   }
}



if (isset($_POST['urunlersil'])) {  #urunler silme işlemleri 

	$gelenkategori_id=$_POST['katid']; #silme işleminde gelen kategori_id degeri

	$urunlersil=$baglanti->prepare("DELETE from urunler where urun_id=:urun_id");

	$urunlersil->execute(array('urun_id'=>$_POST['id'])); //gelen id degerine göre silme işlemi

	if($urunlersil)
	{
		$resimsil=$_POST['resim']; #gelen resmin adı
	  unlink("../resimler/urunler/$resimsil");
		header("Location:../urunler?katid=$gelenkategori_id&yuklenme=basarili");  # silme başarılı sonrası lokasyon 
	}
	else
	{header("Location:../urunler?katid=$gelenkategori_id&yuklenme=basarisiz"); }  # silme başarısız sonrası lokasyon 

	
}




if (isset($_POST['cokresimsil'])) {  #cokluresim silme işlemleri 

	$gelenkategori_id=$_POST['urunid']; #silme işleminde gelen id degeri

	$cokluresimsil=$baglanti->prepare("DELETE from cokluresim where id=:id");

	$cokluresimsil->execute(array('id'=>$_POST['id'])); //gelen id degerine göre silme işlemi

	if($cokluresimsil)
	{
		$resimsil=$_POST['resim']; #gelen resmin adı
	  unlink("../resimler/cokluresim/$resimsil");
		header("Location:../cokluresim?id=$gelenkategori_id&yuklenme=basarili");  # silme başarılı sonrası lokasyon 
	}
	else
	{header("Location:../cokluresim?id=$gelenkategori_id&yuklenme=basarisiz"); }  # silme başarısız sonrası lokasyon 

	
}


if(isset($_POST['kullaniciduzenle'])){ #kullaniciduzenle ile gelen degerlerin işlemleri

	$kid=$_POST['kullaniciid']; #gelen kullanıcı_id değişkene alınır

	$duzenle=$baglanti->prepare("UPDATE kullanici SET 

		kullanici_adsoyad=:kullanici_adsoyad,
		kullanici_mail=:kullanici_mail,
		kullanici_adres=:kullanici_adres,
		kullanici_il=:kullanici_il,
		kullanici_ilce=:kullanici_ilce,
		kullanici_tel=:kullanici_tel
		

	WHERE kullanici_id=$kid

	 ");

	$update=$duzenle->execute(array(

		'kullanici_adsoyad'=>$_POST['adsoyad'],
		'kullanici_mail'=>$_POST['email'],
		'kullanici_adres'=>$_POST['adres'],
		'kullanici_il'=>$_POST['sehir'],
		'kullanici_ilce'=>$_POST['ilce'],
		'kullanici_tel'=>$_POST['telefon']

	));

	if($update){
		header("Location:../../kullanici?yuklenme=basarili"); # güncelleme sonrası lokasyon 
	}
	else
	{
		header("Location:../../kullanici?yuklenme=basarisiz");
	}

}



if (isset($_POST['yorumkaydet'])) { #yorumkaydet kullanıcı tarafondan gelen kaydetme işlemleri 

	$gelenurl=$_SERVER['HTTP_REFERER']; #yorumu geldigi sayfaya yönlendirir

		$yorumkaydet=$baglanti->prepare("INSERT into yorumlar SET 

			yorum_detay=:yorum_detay,
			urun_id=:urun_id,
			kullanici_id=:kullanici_id,
			yorum_onay=:yorum_onay
				

		 ");

		$insert=$yorumkaydet->execute(array(

			'yorum_detay'=>$_POST['yorum'],
			'urun_id'=>$_POST['urunid'],
			'kullanici_id'=>$_POST['kullaniciid'],
			'yorum_onay'=>0 #yorum onay bekliyor
			
		));

		if($insert){		
			header("Location:$gelenurl?yuklenme=basarili"); # güncelleme sonrası lokasyon 
		}
		else
		{
			header("Location:$gelenurl?yuklenme=basarili");
			   
	  }
	
}

if(isset($_POST['yorumonayla'])){ #yorumonayla ile gelen degerlerin işlemleri

	$gelenyorumid=$_POST['yorumid']; #onay için gelen yorumun id degeri


	$duzenle=$baglanti->prepare("UPDATE yorumlar SET 

		yorum_onay=:yorum_onay

	WHERE yorum_id=$gelenyorumid 

	 ");

	$update=$duzenle->execute(array(

		'yorum_onay'=>1

	));

	if($update){
		header("Location:../yorumlar.php?yuklenme=basarili"); # güncelleme sonrası lokasyon 
	}
	else{
		header("Location:../yorumlar.php?yuklenme=basarisiz");
			
	  }

}

if (isset($_GET['yorumlarsil'])) {  #yorumlar silme işlemleri 

	$yorumlarsil=$baglanti->prepare("DELETE from yorumlar where yorum_id=:yorum_id");

	$yorumlarsil->execute(array('yorum_id'=>$_GET['id'])); //gelen id (url) degerine göre silme işlemi

	if($yorumlarsil)
	{
		header("Location:../yorumlar?durum=basarili");
	}
	else
	{ header("Location:../yorumlar?durum=hata"); }

	
}



if(isset($_GET['siparisonayla'])){ #siparisonaylaa ile gelen degerlerin işlemleri

	$gelensiparisid=$_GET['id']; #onay için gelen yorumun id degeri


	$duzenle=$baglanti->prepare("UPDATE siparisler SET 

		siparis_onay=:siparis_onay

	WHERE siparis_id=$gelensiparisid 

	 ");

	$update=$duzenle->execute(array(

		'siparis_onay'=>1

	));

	if($update){
		header("Location:../siparisler.php?yuklenme=basarili"); # güncelleme sonrası lokasyon 
	}
	else{
		header("Location:../siparisler.php?yuklenme=basarisiz");
			
	  }

}


if(isset($_GET['siparisreddet'])){ #siparisonaylaa ile gelen degerlerin işlemleri

	$gelensiparisid=$_GET['id']; #onay için gelen yorumun id degeri


	$duzenle=$baglanti->prepare("UPDATE siparisler SET 

		siparis_onay=:siparis_onay

	WHERE siparis_id=$gelensiparisid 

	 ");

	$update=$duzenle->execute(array(

		'siparis_onay'=>2

	));

	if($update){
		header("Location:../siparisler.php?yuklenme=basarili"); # güncelleme sonrası lokasyon 
	}
	else{
		header("Location:../siparisler.php?yuklenme=basarisiz");
			
	  }

}


if (isset($_GET['abonesil'])) {  #abone silme işlemleri 

	$abonesil=$baglanti->prepare("DELETE from abone where abone_id=:abone_id");

	$abonesil->execute(array('abone_id'=>$_GET['id'])); //gelen id (url) degerine göre silme işlemi

	if($abonesil)
	{
		header("Location:../abone?yuklenme=basarili");
	}
	else
	{ header("Location:../abone?yuklenme=hata"); }

	
}




if (isset($_POST['siparisguncelle'])) {  #siparisguncelle düzenleme işlemleri 

	$siparis_id=$_POST['siparisnumara'];

	$duzenle=$baglanti->prepare("UPDATE siparisler SET 

		siparis_yeniadet=:siparis_yeniadet,
		siparis_not=:siparis_not
				
	WHERE siparis_id=$siparis_id 

	 ");

	$update=$duzenle->execute(array(

		'siparis_yeniadet'=>$_POST['yeniadet'],
		'siparis_not'=>$_POST['siparisnot']

	));

	if($update){
		header("Location:../../siparisler.php?yuklenme=guncellendi"); # güncelleme sonrası lokasyon 
	}
	else{
		header("Location:../../siparisler.php?yuklenme=basarisiz");

			
	  }
}


if (isset($_POST['siparisduzenle'])) {  #siparisduzenle işlemleri  /Admin


	$siparis_id=$_POST['siparisid'];

	$duzenle=$baglanti->prepare("UPDATE siparisler SET 

		urun_adet=:urun_adet
		
				
	WHERE siparis_id=$siparis_id 

	 ");

	$update=$duzenle->execute(array(

		'urun_adet'=>$_POST['adet']

	));

	if($update){
		header("Location:../siparisler.php?yuklenme=guncellendi"); # güncelleme sonrası lokasyon 
	}
	else{
		header("Location:../siparisler.php?yuklenme=basarisiz");

			
	  }
}