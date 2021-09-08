<?php 
include 'ayar.php';
ob_start();
session_start();

if (isset($_POST['girisYap'])) {


		$kullanicisor=$conn->prepare("SELECT * FROM yoneticiler WHERE yonetici_email = :yonetici_email AND sifre = :sifre");
		$kullanicisor->execute(array(
			'yonetici_email' => $_POST['yonetici_email'],
			'sifre' => $_POST['sifre']
		));

		$say=$kullanicisor->rowCount();


		if ($say > 0) {
			$_SESSION["admin_giris"] = "true";
			header("Location: index.php?durum=giris");
		} else {
			header("Location: giris.php?durum=basarisiz");
		}


}





if (isset($_POST['blogEkle'])) {

	$uploads_dir = '../resimler';
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
		header("Location: blog-yonetim.php?durum=basarili");
	}else {

		header("Location: blog-yonetim.php?durum=basarisiz");
	}



}






if (isset($_POST['gorselEkle'])) {





	$uploads_dir = '../resimler';
	@$tmp_name = $_FILES['img']["tmp_name"];
	$name = $_FILES['img']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2;
	$imgYol7=substr($uploads_dir, 3)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$query = $conn->prepare("INSERT INTO galeri SET	
		img = :img
		");


	$insert = $query->execute(array(
		"img" => $imgYol7
		
	));


	if ($insert) {
		header("Location: galeri-yonetim.php?durum=basarili");
	}else {

		header("Location: galeri-yonetim.php?durum=basarisiz");
	}



}






if (isset($_POST['hakkimizdaGuncelle'])) {
	


	if ($_FILES['resim']["size"] > 0) {

		$uploads_dir = '../resimler';
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







if (isset($_POST['siteAyarGuncelle'])) {
	
	##Logo Yüklenmişse
	if ($_FILES['logo']['size'] > 0 ) {
		$uploads_dir = '../resimler';
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
		$uploads_dir = '../resimler';
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




