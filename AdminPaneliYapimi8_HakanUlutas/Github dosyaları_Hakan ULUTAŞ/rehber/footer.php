
<!-- footer -->
<footer>
	<div class="container-xl">
		<div class="footer-inner">
			<div class="row d-flex align-items-center gy-4">
				<div class="col-md-4">
					<span class="copyright"><?php echo $veri['copy']; ?></span>
				</div>

				<!-- social icons -->
				<div class="col-md-4 text-center">
					<ul class="social-icons list-unstyled list-inline mb-0">
						<li class="list-inline-item"><a href="<?php echo $veri['fb']; ?>"><i class="fab fa-facebook-f"></i></a></li>
						<li class="list-inline-item"><a href="<?php echo $veri['ig']; ?>"><i class="fab fa-instagram"></i></a></li>
					</ul>
				</div>

				<!-- go to top button -->
				<div class="col-md-4">
					<a href="#" id="return-to-top" class="float-md-end"><i class="icon-arrow-up"></i>Yukarı Çık</a>
				</div>
			</div>
		</div>
	</div>
</footer>

</div><!-- end site wrapper -->



<!-- canvas menu -->
<div class="canvas-menu d-flex align-items-end flex-column">
	<!-- close button -->
	<button type="button" class="btn-close" aria-label="Close"></button>

	<!-- logo -->
	<div class="logo">
		<img src="<?php echo $veri['logo']; ?>"  />
	</div>

	<!-- menu -->
	<nav>
		<ul class="vertical-menu">



			<li class=" active">
				<a class="" href="index.php">Anasayfa</a>
			</li>


			<li class="">
				<a class="" href="galeri">Galeri</a>
			</li>


			<li class="">
				<a class="" href="hakkimizda">Hakkımızda</a>
			</li>

			<li class="">
				<a class="" href="ziyaretci-defteri">Ziyaretçi Defter</a>
			</li>


			<li class="">
				<a class="" href="iletisim">İletişim</a>
			</li>






		</ul>
	</nav>

	<!-- social icons -->
	<ul class="social-icons list-unstyled list-inline mb-0 mt-auto w-100">
		<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
	</ul>
</div>

<!-- JAVA SCRIPTS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.sticky-sidebar.min.js"></script>
<script src="js/custom.js"></script>




<?php if (@$_GET['status']=='ok') {?>
	<script>alert('Başarılı');</script>
<?php } ?>
</body>


</html>

