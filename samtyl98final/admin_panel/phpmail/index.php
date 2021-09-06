<?php 
ob_start();
session_start();

$baglan=new mysqli($sunucu,$kullaniciadi,$sifre,$database) or die("Unable to connect");
$mail_sorgula = $baglan->query("select * from ayarlar");
$mail_ayar_cek = mysqli_fetch_assoc($mail_sorgula);


$smtpuser=echo $ayar_cek['site_bg'] ;
$smtphost=echo $ayar_cek['site_bg'] ;
$smtpport= echo $ayar_cek['site_bg'] ;
$smtppass=echo $ayar_cek['site_bg'] ;



if (isset($_POST['mail_gönder'])) {
	
	
	$isim = htmlspecialchars(trim($_POST['isim'])); 
	$email = htmlspecialchars(trim($_POST['email'])); 
	$mesaj = htmlspecialchars(trim($_POST['mesaj'])); 
	$ip = htmlspecialchars(trim($_POST['iletisim_ip'])); 


	include 'class.phpmailer.php';
	$epostal=$smtpuser;
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = false;
	$mail->Host = $smtphost;
	$mail->Port = $smtpport;
	$mail->SMTPSecure = 'tls';
	$mail->Username = $smtpuser;
	$mail->Password = $smtppass;
	$mail->SetFrom($mail->Username, $isim);
	$mail->AddAddress($epostal, $isim);
	$mail->AddAddress($eposta, $isim);
	$mail->CharSet = 'UTF-8';
	$mail->Subject = 'İletişim Formu';
	$content = '
	<b>Websitenizden gelen iletişim maili</b><br>
	<table align="left" class="tg" style="undefined;table-layout: fixed; width: 535px">

		<tr>
			<td class="tg-031e">Ad Soyad</td>
			<td class="tg-031e">:</td>
			<td class="tg-031e">'.$isim.'</td>
		</tr>
	
		<tr>
			<td class="tg-031e">E-Posta</td>
			<td class="tg-031e">:</td>
			<td class="tg-031e">'.$email.'</td>
		</tr>
		<tr>
			<td class="tg-031e">Mesaj</td>
			<td class="tg-031e">:</td>
			<td class="tg-031e">'.$mesaj.'</td>
		</tr>
		<tr>
			<td class="tg-031e">İp Adresi</td>
			<td class="tg-031e">:</td>
			<td class="tg-031e">'.$ip.'</td>
		</tr>
	</table>';




	$mail->MsgHTML($content);
	if($mail->Send()) {

		header("Location:../index.php?iletisimgonder=ok");
	} 
	else {
			// bir sorun var, sorunu ekrana bastıralım
		header("Location:../index.php?iletisimgonder=no");
	}



}

exit;

?>

