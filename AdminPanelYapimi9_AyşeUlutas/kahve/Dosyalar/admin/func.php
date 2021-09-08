<?php



session_start();

ob_start();

include 'ayar.php';

if (isset($_POST['girisYap'])) {



	##Böyle bir üye var mı?

	$kullanicisor=$conn->prepare("SELECT * FROM yoneticiler WHERE yonetici_email = :yonetici_email AND sifre = :sifre ");

	$kullanicisor->execute(array(

		'yonetici_email' => $_POST['yonetici_email'],

		'sifre' => $_POST['sifre']

	));



	$say=$kullanicisor->rowCount();



	if ($say > 0) {



		$_SESSION['admin_giris'] = 'true';

		header("Location: index.php?durum=giris");





	} else {

		header("Location: giris.php?durum=girisBasarisiz");

	}







}














if (isset($_POST['yoneticiSifreGuncelle'])) {



	if ($_POST['sifre'] == $_POST['sifreTekrar']) {



		$query = $conn->prepare("UPDATE yoneticiler SET		

			sifre = :sifre

			");



		$update = $query->execute(array(

			"sifre" => $_POST['sifre']

		));





		if ($update) {

			header("Location: profil.php?durum=sifreBasarili");

		}else {

			header("Location: profil.php?durum=basarisiz");

		}







	}else {

		header("location: profil.php?durum=sifreUyusmuyor");

	}





}











if (isset($_POST['yoneticiBilgiGuncelle'])) {





	$query = $conn->prepare("UPDATE yoneticiler SET		

		yonetici_email = :yonetici_email

		");



	$update = $query->execute(array(

		"yonetici_email" => $_POST['yonetici_email']

	));





	if ($update) {

		header("Location: profil.php?durum=basarili");

	}else {

		header("Location: profil.php?durum=basarisiz");

	}









}



if (isset($_POST['siteAyarGuncelle'])) {
	
	##Logo Yüklenmişse
	if ($_FILES['logo']['size'] > 0 ) {
		$uploads_dir = '../uploads';
		@$tmp_name = $_FILES['logo']["tmp_name"];
		$name = $_FILES['logo']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2;
		$imgYol =substr($uploads_dir, 3)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$query = $conn->prepare("UPDATE site_ayar SET
			logo = :logo
			");

		$update = $query->execute(array(

			"logo" => $imgYol

		));

	}




	##Favicon Yüklenmişse
	if ($_FILES['favicon']['size'] > 0 ) {
		$uploads_dir = '../uploads';
		@$tmp_name = $_FILES['favicon']["tmp_name"];
		$name = $_FILES['favicon']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2;
		$imgYol =substr($uploads_dir, 3)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$query = $conn->prepare("UPDATE site_ayar SET
			favicon = :favicon
			");

		$update = $query->execute(array(

			"favicon" => $imgYol

		));

	}


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

	if ($update) {
		header("location:site-ayar.php?durum=basarili");
	}else {

		header("location:site-ayar.php?durum=basarisiz");
	}






}






if (isset($_POST['gorselEkle'])) {
	

	$uploads_dir = '../uploads';
	@$tmp_name = $_FILES['img']["tmp_name"];
	$name = $_FILES['img']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2;
	$imgYol =substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$query = $conn->prepare("INSERT INTO galeri SET
		img = :img
		");

	$insert = $query->execute(array(
		"img" => $imgYol

	));

	if ($insert) {
		header("location: galeri-yonetim.php?durum=basarili");
	}else {
		header("location: galeri-yonetim.php?durum=basarisiz");

	}

}







if (isset($_POST['hakkimizdaGuncelle'])) {
	


	if ($_FILES['resim']["size"] > 0) {

		$uploads_dir = '../uploads';
		@$tmp_name = $_FILES['resim']["tmp_name"];
		$name = $_FILES['resim']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2;
		$imgYol =substr($uploads_dir, 3)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$query = $conn->prepare("UPDATE hakkimizda SET
			resim = :resim
			");

		$insert = $query->execute(array(
			"resim" => $imgYol

		));
	}


	$query = $conn->prepare("UPDATE hakkimizda SET
		hakkimizda = :hakkimizda
		");

	$insert = $query->execute(array(
		"hakkimizda" => $_POST['hakkimizda']

	));





	if ($insert) {
		header("location: hakkimizda-yonetim.php?durum=basarili");
	}else {
		header("location: hakkimizda-yonetim.php?durum=basarisiz");

	}

}







if (isset($_POST['anasayfaGuncelle'])) {
	


	if ($_FILES['yazi_img']["size"] > 0) {

		$uploads_dir = '../uploads';
		@$tmp_name = $_FILES['yazi_img']["tmp_name"];
		$name = $_FILES['yazi_img']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2;
		$imgYol =substr($uploads_dir, 3)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$query = $conn->prepare("UPDATE anasayfa SET
			yazi_img = :yazi_img
			");

		$insert = $query->execute(array(
			"yazi_img" => $imgYol

		));
	}


	$query = $conn->prepare("UPDATE anasayfa SET
		yazi_baslik = :yazi_baslik,
		yazi_icerik = :yazi_icerik
		");

	$insert = $query->execute(array(
		"yazi_baslik" => $_POST['yazi_baslik'],
		"yazi_icerik" => $_POST['yazi_icerik']

	));





	if ($insert) {
		header("location: anasayfa-yonetim.php?durum=basarili");
	}else {
		header("location: anasayfa-yonetim.php?durum=basarisiz");

	}

}







if (isset($_POST['kategoriEkle'])) {
	

	$query = $conn->prepare("INSERT INTO kategoriler SET
		kategori_adi = :kategori_adi
		");

	$insert = $query->execute(array(
		"kategori_adi" => $_POST['kategori_adi']

	));



	if ($insert) {
		header("location: kategori-yonetim.php?durum=basarili");
	}else {
		header("location: kategori-yonetim.php?durum=basarisiz");

	}

}








if (isset($_POST['kahveEkle'])) {
	



	$uploads_dir = '../uploads';
	@$tmp_name = $_FILES['kahve_img']["tmp_name"];
	$name = $_FILES['kahve_img']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2;
	$imgYol =substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");



	$query = $conn->prepare("INSERT INTO kahveler SET
		kahve_adi = :kahve_adi,
		kahve_img = :kahve_img,
		kahve_kategori = :kahve_kategori

		");

	$insert = $query->execute(array(
		"kahve_adi" => $_POST['kahve_adi'],
		"kahve_img" => $imgYol,
		"kahve_kategori" => $_POST['kahve_kategori'],

	));



	if ($insert) {
		header("location: kahve-yonetim.php?durum=basarili");
	}else {
		header("location: kahve-yonetim.php?durum=basarisiz");

	}

}






?>