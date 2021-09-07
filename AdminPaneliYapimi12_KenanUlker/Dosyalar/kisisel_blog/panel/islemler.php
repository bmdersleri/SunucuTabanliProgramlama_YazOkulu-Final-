<?php
include 'inc/ayar.php';
ob_start();
session_start();

if (isset($_POST['girisYap'])) {

	//Giriş yapma işlemi dbden sorgu atılır, eğer dbdeki bilgiler ile eşleşirse session oluşturur ve giriş yapılır.
	$k_adi = $_POST['k_adi'];
	$sifre = $_POST['sifre'];


	if ($k_adi && $sifre) {
		$kullanicisor=$conn->prepare("SELECT * FROM admin WHERE k_adi = :mail AND sifre = :sifre");
		$kullanicisor->execute(array(
			'mail' => $k_adi,
			'sifre' => $sifre
		));

		$say=$kullanicisor->rowCount();


		if ($say > 0) {

			$_SESSION["admin_giris"] = "true";
			header("Location: index.php?durum=giris");
		} else {
			header("Location: giris.php?durum=basarisiz");
		}
	}


}





if (isset($_POST['gorselEkle'])) {
	//Görseli klasöre ekleyip ardından dbye eklenir
	$uploads_dir = '../img/galeri';
	@$tmp_name = $_FILES['img']["tmp_name"];
	$name = $_FILES['img']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2;
	$imgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


	$query = $conn->prepare("INSERT INTO galeri SET
		img = :img
		");

	$insert = $query->execute(array(
		"img" => $imgyol

	));

	if ($insert) {
		header("location: galeri-ayar.php?durum=basarili");
	}else {
		header("location: galeri-ayar.php?durum=basarisiz");
	}



}






if (isset($_POST['siteAyarGuncelle'])) {

//Post ile alınan verileri site ayar tablosunda güncelleme işlemi

	$query = $conn->prepare("UPDATE site_ayar SET
		title = :title,
		google_maps = :google_maps,
		fb = :fb,
		ig = :ig,
		copy = :copy
		");


	$update = $query->execute(array(
		"title" => $_POST['title'],
		"google_maps" => $_POST['google_maps'],
		"fb" => $_POST['fb'],
		"ig" => $_POST['ig'],
		"copy" => $_POST['copy']

	));





	//Logo Yüklenmişse
	if ($_FILES['logo']["size"] > 0) {
		$uploads_dir = '../img';
		@$tmp_name = $_FILES['logo']["tmp_name"];
		$name = $_FILES['logo']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2;
		$imgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$query = $conn->prepare("UPDATE site_ayar SET
			logo = :logo
			");

		$update = $query->execute(array(
			"logo" => $imgyol

		));


	}





	//Logo Dark Yüklenmişse
	if ($_FILES['logo_dark']["size"] > 0) {
		$uploads_dir = '../img';
		@$tmp_name = $_FILES['logo_dark']["tmp_name"];
		$name = $_FILES['logo_dark']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2;
		$imgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$query = $conn->prepare("UPDATE site_ayar SET
			logo_dark = :logo_dark
			");

		$update = $query->execute(array(
			"logo_dark" => $imgyol

		));


	}






	//Favicon Yüklenmişse
	if ($_FILES['favicon']["size"] > 0) {
		$uploads_dir = '../img';
		@$tmp_name = $_FILES['favicon']["tmp_name"];
		$name = $_FILES['favicon']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2;
		$imgyol2=substr($uploads_dir, 3)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");



		$query = $conn->prepare("UPDATE site_ayar SET

			favicon = :favicon
			");


		$update = $query->execute(array(
			"favicon" => $imgyol2

		));


	}



	if ($update) {
		header("Location: site-ayar.php?durum=basarili");
	}else {

		header("Location: site-ayar.php?durum=basarisiz");
	}




}















if (isset($_POST['yazarGuncelle'])) {

	//Post ile alınan yazar verileri dbye kaydedilir.

	$query = $conn->prepare("UPDATE yazar SET
		yazar_adi = :yazar_adi,
		yazar_hakkinda = :yazar_hakkinda
		");


	$update = $query->execute(array(
		"yazar_adi" => $_POST['yazar_adi'],
		"yazar_hakkinda" => $_POST['yazar_hakkinda']
	));







	if ($_FILES['yazar_img']["size"] > 0) {

		$uploads_dir = '../img';
		@$tmp_name = $_FILES['yazar_img']["tmp_name"];
		$name = $_FILES['yazar_img']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2;
		$imgyol4=substr($uploads_dir, 3)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$query = $conn->prepare("UPDATE yazar SET
			yazar_img = :yazar_img
			");


		$update = $query->execute(array(
			"yazar_img" => $imgyol4
		));


	}




	if ($update) {
		header("Location: yazar-ayar.php?durum=basarili");
	}else {

		header("Location: yazar-ayar.php?durum=basarisiz");
	}


}














if (isset($_POST['blogEkle'])) {

	//post ile alınan blog verileri dbye kaydedilir görsel klasöre taşınır.
	$uploads_dir = '../img/blog';
	@$tmp_name = $_FILES['resim']["tmp_name"];
	$name = $_FILES['resim']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2;
	$imgYol7=substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$query = $conn->prepare("INSERT INTO blog SET
		baslik = :baslik,
		text = :text,
		resim = :resim
		");


	$insert = $query->execute(array(
		"baslik" => $_POST['baslik'],
		"text" => $_POST['text'],
		"resim" => $imgYol7

	));


	if ($insert) {
		header("Location: blog-ayar.php?durum=basarili");
	}else {

		header("Location: blog-ayar.php?durum=basarisiz");
	}



}







if (isset($_POST['blogGuncelle'])) {

	//Blog verileri alınarak güncelleme yapılır, dbye kaydedilir.
	//Görsel Yüklenmişse
	if ($_FILES['logo']["size"] > 0) {
		$uploads_dir = '../img/blog';
		@$tmp_name = $_FILES['resim']["tmp_name"];
		$name = $_FILES['resim']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2;
		$imgYol7=substr($uploads_dir, 3)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$query = $conn->prepare("UPDATE  blog SET
			resim = :resim
			WHERE id = :id
			");


		$update = $query->execute(array(
			"id" => $_POST['id'],
			"resim" => $imgYol7

		));

	}


	$query = $conn->prepare("UPDATE  blog SET
		baslik = :baslik,
		text = :text
		WHERE id = :id
		");

	$update = $query->execute(array(
		"baslik" => $_POST['baslik'],
		"text"=>$_POST['text'],
		"id" => $_POST['id'],

	));



	if ($update) {
		header("Location: blog-ayar.php?durum=basarili");
	}else {

		header("Location: blog-ayar.php?durum=basarisiz");
	}



}







if (isset($_POST['profilGuncelle'])) {

	//Post ile gelen şifre verileri karşılaştırılır eğer şifreler eşleşiyorsa güncelleme işlemi yapılır.

	if ($_POST['sifre'] == $_POST['sifreTekrar']) {

		$query = $conn->prepare("UPDATE admin SET
			sifre = :sifre
			");

		$update = $query->execute(array(
			"sifre" => $_POST['sifre']
		));


		if ($update) {
			header("Location: profil.php?durum=basarili");
		}else {

			header("Location: profil.php?durum=basarisiz");
		}


	}else {

		header("Location: profil.php?durum=sifre");
	}





}








?>
