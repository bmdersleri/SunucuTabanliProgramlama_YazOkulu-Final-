<?php include 'header.php'; ?>


<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
/>


<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>



<section id="hero">

	<div class="container-xl">

		<div class="row gy-4">

			<div class="col-md-12">
				<div class="spacer" data-height="50"></div>

				<div class="section-header">
					<h3 class="section-title">Galeri</h3>
					<img src="images/wave.svg" class="wave" alt="wave" />
				</div>
				
				
			</div>
			

			<div class="row">



				<?php 
                    //Galeriden veriler çekilir.
				$galeriCek=$conn->prepare("SELECT * FROM galeri ORDER BY id DESC");
				$galeriCek->execute();
				while ($rowGaleri=$galeriCek->fetch(PDO::FETCH_ASSOC)) { ?>
					<a class="col-md-3 mb-1" data-fancybox="galeri" data-src="<?php echo $rowGaleri['img']; ?>" >
						<img src="<?php echo $rowGaleri['img']; ?>">
					</a>

				<?php } ?>


			</div>

			




		</div>

	</div>

	<?php include 'footer.php'; ?>