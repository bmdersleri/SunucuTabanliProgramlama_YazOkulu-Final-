<footer>
	<div class="container">
		<div class="row">
			<div class="col-3 pt-5">
				<div class="row">
					<div class="col mb-4">
						<img src="assets/img/logo_white.png" height="30px" alt="">
					</div>
				</div>
				<div class="row">
					<div class="col">
						<p>With it’s highly capable and experienced team, S’thetics provides full system service to its customers from sketches to turnkey projects with a wide range of solid surface finish materials.  </p>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="social">
							<ul class="list-inline m-0">
								<li class="list-inline-item"><a href="#f"><i class="fab fa-facebook-f"></i></a></li>
								<li class="list-inline-item"><a href="#f"><i class="fab fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#f"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-9 pt-5">
				<div class="row footer-bg">
					<div class="col p-5 pt-0 pl-0">
						<h3>Products</h3>
						<div class="row">
							<div class="col">
								<ul class="list-inline">
									<li class="mb-4 mt-2"><a href="#">Ventilated Facade Fystems</a></li>
									<li class="mb-4"><a href="#">Porcelain Facade System</a></li>
									<li class="mb-4"><a href="#">Terracotta</a></li>
									<li class="mb-4"><a href="#">Aluminum AMC</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col p-5 pt-0 pl-0">
						<h3>Recent Projects</h3>
						<div class="row">
							<div class="col">
								<ul class="list-inline">
									<li class="mb-4 mt-2"><a href="#">Kiev Hotel</a></li>
									<li class="mb-4"><a href="#">Yalova Poets Museum</a></li>
									<li class="mb-4"><a href="#">Kalamış Konut</a></li>
									<li class="mb-4"><a href="#">novawood Headquarter</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col p-5 pt-0 pl-0">
						<h3>Contacts</h3>
						<div class="row">
							<div class="col">
								<ul class="list-inline">
									<li class="mb-4 mt-2"><i class="fas fa-map-marker-alt"></i> <a href="https://goo.gl/maps/ZChoB1ZkuwQAgqmi8" target="_blank">207 Edgeley Blvd. Unit 2 Concord, ON L4K 4B5, Canada</a></li>
									<li class="mb-4"><i class="far fa-envelope-open"></i> <a href="mailto:info@sthetics.ca">info@sthetics.ca</a></li>
									<li class="mb-4"><i class="fas fa-phone-alt"></i> <a href="tel:05331421624">0 (533) 142 1624</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container border-top pt-3 pb-3">
		<div class="row d-flex align-items-center">
			<div class="col">
				Copyright® S'thetics 2021 Design by teffo
			</div>
			<div class="col">
				<div class="select-language float-end">
					<span>Select Language</span>
					<span class="float-start pr-5"><i class="fas fa-globe-africa"></i></span>
					<span>EN</span>
				</div>
			</div>
		</div>
	</div>
</footer>
<script src="assets/plugin/bootstrap5/js/bootstrap.js" charset="utf-8"></script>

<!-- Initialize Swiper -->
<script>
	var swiper = new Swiper('.swiper-container', {
		speed: 600,
		parallax: true,
		effect: 'fade',
		autoplay: {
			delay: 7000,
			disableOnInteraction: false,
		},
		loop: true,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});
</script>
<script>


	$(window).on("scroll", function(){
		var top = $("html").scrollTop();
		if(top > 10){
			$("body").addClass("fixed")
		}else{
			$("body").removeClass("fixed")
		}
		console.log(top);
	})

</script>

</body>

</html>
