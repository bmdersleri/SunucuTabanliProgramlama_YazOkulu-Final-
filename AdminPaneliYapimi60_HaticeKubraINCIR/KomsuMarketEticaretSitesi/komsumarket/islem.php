<?php

session_start();
require_once 'Admin/islem/baglanti.php'; #veritabanı baglantısı için


if (isset($_POST['login'])) { #login geldiyse yapılacak işlemler

	$kadi=htmlspecialchars($_POST['kadi']);
	$sifre=htmlspecialchars($_POST['sifre']);
	$sifreguclu=md5($sifre);  #md5 ile güçlendirme
	#echo $sifreguclu;


	#kullanıcı tablosundan yetki,şifre ve ada göre değerler getirilir 
	$kullanicisorgu=$baglanti->prepare("SELECT * from kullanici where kullanici_adi=:kullanici_adi and kullanici_sifre=:kullanici_sifre and kullanici_yetki=:kullanici_yetki");

	$kullanicisorgu->execute(array(
		'kullanici_adi'=>$kadi,
		'kullanici_sifre'=>$sifreguclu,
		'kullanici_yetki'=>1 #kullanıcı yetkisi 1 olan normal kullanıcı 

	));

	$varmi=$kullanicisorgu->rowCount(); //kullanici var mı sayac

	if($varmi >0) #kullanıcı var
	{
		$_SESSION['normalbelgesi']=$kadi; #normal giris isimli oluşturulan session'a, kullanıcı adı atanır
		header("Location:index?durum=hosgeldin"); #doğru girişlerde -> index
		
	}
	else
	{
		header("Location:giris?durum=hata"); #yanlış girişlerde -> login
	}
	
}


if (isset($_POST['kaydol'])) { #kaydol geldiyse yapılacak işlemler

	$kadi=htmlspecialchars($_POST['kadi']);
	$sifre=htmlspecialchars($_POST['sifre']);
	$sifrem=md5($sifre);
	$sifretekrar=htmlspecialchars($_POST['sifretekrar']);
	$email=htmlspecialchars($_POST['email']);
	$adsoyad=htmlspecialchars($_POST['adsoyad']);


	### kullanıcı_adi ile daha önceden kayıt var mı kontrolü ###

	#kullanıcı tablosundan yetki ve ada göre değerler getirilir 
	$kullanicisorgu=$baglanti->prepare("SELECT * from kullanici where kullanici_adi=:kullanici_adi and kullanici_yetki=:kullanici_yetki");

	$kullanicisorgu->execute(array(
		'kullanici_adi'=>$kadi,
		'kullanici_yetki'=>1 #normail kullanıcı

	));
	$varmi=$kullanicisorgu->rowCount(); //kullanici var mı sayac
	#echo $varmi;

    if($varmi>0){  #varsa hata yönlendirmesi yapılır
		header("Location:giris?durum=kullanicivar");
	 } 

    else{ #kullanıcı yoksa kullanıcı kaydedilir 
		if ($sifre==$sifretekrar) { #şifreler birbirine eşit mi

			if (strlen($sifre)>=7) { #şifre uzunluğu 7'den büyük ise kaydetme işlemi yapılır

			//### kullanıcı veritabanına ekleme ###

			 $Kullanicikaydet=$baglanti->prepare("INSERT into kullanici SET 
				kullanici_adi=:kullanici_adi,
				kullanici_sifre=:kullanici_sifre,
			    kullanici_adsoyad=:kullanici_adsoyad,
			    kullanici_yetki=:kullanici_yetki,
			    kullanici_mail=:kullanici_mail
				

		     ");

		     $insert=$Kullanicikaydet->execute(array(

			   'kullanici_adi'=>$kadi,
			   'kullanici_sifre'=>$sifrem,
			   'kullanici_adsoyad'=>$adsoyad,
			   'kullanici_yetki'=>1,
			   'kullanici_mail'=>$email
			
		     ));
		      if($insert){		
			    header("Location:kullanici?durum=basarili"); # ekleme başarılı lokasyona git  
			   }
			   else
			   {
			    header("Location:kullanici?durum=basarisiz"); # ekleme başarısız lokasyona git 
			   }
				

			}
			else{header("Location:giris?durum=sifreeksik");} # şifre 7 karakterden eksik lokasyona git 
			
		}
		else { #şifreler yanlış
			header("Location:giris?durum=sifrehata"); # şifreler aynı değil lokasyona git
		}
	}
}


if (isset($_POST['sepeteekle'])) {  #sepeteekle geldiyse yapılacak işlemler

	$id=$_POST['urunid'];
	$adet=$_POST['adet'];

	setcookie('sepet['.$id.']', $adet, strtotime("+7day")); 
	#print_r($_COOKIE['sepet']);

	header("Location:sepet?durum=eklendi");


}


if (isset($_GET['sepetsil'])) {  #sepetsil geldiyse yapılacak işlemler

	$id=$_GET['id']; 
	$adet=$_GET['adet'];

	setcookie('sepet['.$id.']', $adet, strtotime("-7day")); 
	
	header("Location:sepet?durum=silindi"); #silme işlemi sonrası lokasyon


}


if (isset($_POST['alisverisbitir'])) { #alisverisbitir geldiyse yapılacak işlemler

	$toplamfiyat=$_POST['toplamfiyat']; #alışveriş sayfasından gelen değerler
	$kadi=$_POST['kadi'];

	#foreach ile birden çok ürün veritabanına eklenir
	foreach (@$_COOKIE['sepet'] as $key => $value) { #sepet isimli cookieden ürünler getirilir
		$urunler=$baglanti->prepare("SELECT * FROM urunler where urun_id=:urun_id  order by urun_sira ASC");
		$urunler->execute(array(
		   'urun_id'=>$key  #urunid $key'den gelen id degerine eşitlenir
          ));
		$urunlergetir=$urunler->fetch(PDO::FETCH_ASSOC);
		$fiyat=$urunlergetir['urun_fiyat'];
                                                
    #veritabanına ekleme 
	$alisveriskaydet=$baglanti->prepare("INSERT into siparisler SET 

 
			kullanici_id=:kullanici_id,
			urun_id=:urun_id,
			urun_adet=:urun_adet,
			urun_fiyat=:urun_fiyat,
			toplam_fiyat=:toplam_fiyat,
			odeme_turu=:odeme_turu,
			siparis_onay=:siparis_onay
				
				
		 ");

		$insert=$alisveriskaydet->execute(array(

			'kullanici_id'=>$kadi,
			'urun_id'=>$key,
			'urun_adet'=>$value,
			'urun_fiyat'=>$fiyat,
			'toplam_fiyat'=>$toplamfiyat,
			'odeme_turu'=>$_POST['odeme'],
			'siparis_onay'=>0
			
		));
      }
		if($insert){		
			header("Location:../komsumarket/index?durum=tesekkur"); # alışveriş tamamlandıktan sonrası lokasyon 
		}
		else
		{
			header("Location:../komsumarket/index?durum=basarisiz");
			   
	  }

}


if (isset($_POST['aboneol'])) {

	$aboneol=$baglanti->prepare("INSERT into abone SET 
		abone_email=:abone_email
				

	 ");

	$insert=$aboneol->execute(array(
		'abone_email'=>$_POST['abonemail']
	  ));

		if($insert){		
			header("Location:index?yuklenme=basarili"); # güncelleme sonrası lokasyon 
		}
		else
		{
			header("Location:index?yuklenme=basarisiz");
			   
	  }

}



?>