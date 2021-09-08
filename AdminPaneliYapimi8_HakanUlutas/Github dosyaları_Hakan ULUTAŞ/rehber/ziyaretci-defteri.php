<?php include 'header.php'; ?>

<section id="hero">

	<div class="container-xl">

		<div class="row gy-4">

			<div class="col-lg-12">






				<div class="spacer" data-height="50"></div>

				<!-- section header -->
				<div class="section-header">
					<h3 class="section-title">Ziyaretçi Defteri</h3>
					<img src="images/wave.svg" class="wave" alt="wave" />
				</div>


				<form id="contact-form" class="contact-form" method="post" action="fonksiyon.php">

					<div class="messages"></div>

					<div class="row">

						<div class="column col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" name="ziyaret_adi" placeholder="Adınız" required="required" >
							</div>
						</div>

						

						<div class="column col-md-12">
							<div class="form-group">
								<input type="text" name="ziyaret_yorum"  class="form-control" required="" placeholder="Yorumunuz">
							</div>
						</div>

						
					</div>

					<button type="submit" name="ziyaretGonder"  class="btn btn-default ">Ziyaretimi Gönder</button>

				</form>





				<div class="col-md-12 mt-5">

					<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Ziyaretçi Yorumları</h3>
								<img src="images/wave.svg" class="wave" alt="wave">
							</div>
							<div class="widget-content">





								<?php 
								$yorumCek=$conn->prepare("SELECT * FROM ziyaretci_defteri ORDER BY ziyaret_tarih DESC");
								$yorumCek->execute();
								while ($row=$yorumCek->fetch(PDO::FETCH_ASSOC)) { ?>


									<div class="post post-list-sm circle">

										<div class="details clearfix">
											<h4 class="post-title my-0"><?php echo $row['ziyaret_adi']; ?></h4>
											<h6 class="post-title my-0"><?php echo $row['ziyaret_yorum'] ?></h6>
											<ul class="meta list-inline mt-1 mb-0">
												<li class="list-inline-item"><?php echo $row['ziyaret_tarih']; ?></li>
											</ul>
										</div>
									</div>


								<?php } ?>

								

							</div>		
						</div>


					
				</div>


			</div>

		</div>

	</div>

	<?php include 'footer.php'; ?>