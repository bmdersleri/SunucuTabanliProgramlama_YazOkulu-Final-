<?php include 'header.php'; ?>

<section id="hero">

	<div class="container-xl">

		<div class="row gy-4">

			<div class="col-lg-12">






				<div class="spacer" data-height="50"></div>

				<!-- section header -->
				<div class="section-header">
					<h3 class="section-title">Mesaj Gönder</h3>
					<img src="images/wave.svg" class="wave" alt="wave" />
				</div>


				<div>
					<?php echo $veri['google_maps']; ?>
				</div>
				<form id="contact-form" class="contact-form" method="post" action="fonksiyon.php">

					<div class="messages"></div>

					<div class="row">

						<div class="column col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" name="ad_soyad" placeholder="Adınız" required="required" >
							</div>
						</div>

						
						
						<div class="column col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" name="email" placeholder="Email Adresiniz" required="required" >
							</div>
						</div>



						<div class="column col-md-12">
							<div class="form-group">
								<textarea name="mesaj"  class="form-control" rows="4" placeholder="Mesajınız.." required="required"></textarea>
							</div>
						</div>



						
					</div>

					<button type="submit" name="mesajSubmit"  class="btn btn-default">Mesajımı Gönder</button>

				</form>




			</div>

		</div>

	</div>

	<?php include 'footer.php'; ?>