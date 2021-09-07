<div id="teams">
	<h2>TEAM</h2>
	<h3>A perfect blend of creativity and technical wizardry.</h3>
	<div class="container">
		<div class="teams-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<a href="">
						<img src="assets/img/pp/1.jpg" alt="">
						<small>Desıgner</small>
						<span class="name">David</span>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="">
						<img src="assets/img/pp/2.jpg" alt="">
						<small>Archıtecture</small>
						<span class="name">John</span>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="">
						<img src="assets/img/pp/3.jpg" alt="">
						<small>Developer</small>
						<span class="name">Marry</span>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="">
						<img src="assets/img/pp/4.jpg" alt="">
						<small>CEO</small>
						<span class="name">Clark</span>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="">
						<img src="assets/img/pp/5.jpg" alt="">
						<small>TEO</small>
						<span class="name">Harry</span>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="">
						<img src="assets/img/pp/6.jpg" alt="">
						<small>TERM</small>
						<span class="name">Cirsh</span>
					</a>
				</div>
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination swiper-pagination-white"></div>
			<!-- Add Navigation -->
			<div class="swiper-button-prev swiper-button-white"></div>
			<div class="swiper-button-next swiper-button-white"></div>
		</div>
	</div>
</div>
<style>


</style>
<script>
	var swiper = new Swiper('.teams-container', {
		slidesPerView: 'auto',
		loop: true,
		centeredSlides: true,
		slidesPerView: 3,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});
</script>
