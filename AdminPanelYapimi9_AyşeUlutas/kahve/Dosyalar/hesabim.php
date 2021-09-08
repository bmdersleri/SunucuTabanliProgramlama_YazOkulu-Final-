<?php
ob_start();
session_start();
if (!isset($_SESSION["kul_giris"])) 
{
	header('location:giris-kayit');
}else {
	include 'header.php';
	$kul_id = $_SESSION['kul_id'];

	$kullanici = $conn->query("SELECT * FROM kullanicilar WHERE kul_id = '$kul_id' ")->fetch(PDO::FETCH_ASSOC);
}



?>




<div class="section">
	<div class="container">

		<a class="btn btn-danger mb-3" href="cikis.php">Çıkış Yap</a>

		<form method="POST" action="func.php">
			<input type="hidden" name="kul_id" value="<?php echo $kullanici['kul_id']; ?>">
			<div class="row">

				<div class="col-md-12">
					<div class="form-group">
						<label>Kullanıcı Adı</label>
						<input type="text" name="kul_adi" value="<?php echo $kullanici['kul_adi']; ?>" class="form-control">
					</div>

					<div class="form-group">
						<label>Kullanıcı E-Posta</label>
						<input type="text" name="kul_eposta" value="<?php echo $kullanici['kul_eposta']; ?>" class="form-control">
					</div>


					<div class="form-group">
						<button type="submit" class="andro_btn-custom primary" name="profilGuncelle">Güncelle</button>
					</div>


				</div>
			</form>


		</div>
	</div>
</div>








<?php include 'footer.php'; ?>

