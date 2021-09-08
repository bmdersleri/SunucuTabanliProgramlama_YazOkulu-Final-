<?php include 'header.php'; ?>

<div class="section">
	<div class="imgs-wrapper">
		<img src="assets/img/products/1.png" alt="veg" class="d-none d-lg-block">
		<img src="assets/img/products/14.png" alt="veg" class="d-none d-lg-block">
	</div>
	<div class="container">
		<div class="andro_auth-wrapper">



			<div style="border-right: 1px solid black;" class="andro_auth-form">

				<h2>Giriş Yap</h2>

				<form method="POST" action="func.php">

					<div class="form-group">
						<input type="text" class="form-control" placeholder="E-Mail" name="kul_eposta" value="">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Şifreniz" name="kul_sifre" value="">
					</div>

					<button type="submit" class="andro_btn-custom primary" name="girisYap">Giriş Yap</button>


				</form>
			</div>




			<div class="andro_auth-form">

				<h2>Üye Ol</h2>

				
				<form method="POST" action="func.php">

					<div class="form-group">
						<input type="text" class="form-control" placeholder="E-Mail" name="kul_eposta" value="">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" placeholder="Adınız Soyadınız" name="kul_adi" value="">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Şifreniz" name="kul_sifre" value="">
					</div>

					<button type="submit" class="andro_btn-custom primary" name="uyeOl">Üye Ol</button>


				</form>

			</div>



		</div>
	</div>
</div>


<?php include 'footer.php'; ?>