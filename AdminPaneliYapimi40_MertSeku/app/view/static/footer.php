<footer>
	<?php
	$sorgu = query("select * from project_content where lang={$langcookie} order by projectid desc limit 5");
	if (num($sorgu) <= 0) {
		$sorgu = query("select * from project_content where lang=1 order by projectid desc limit 5");
	}
	$recentprojects = "";
	while ($f = fetch($sorgu)) {
		$recentprojects .= '<li class="mb-4 mt-2"><a href="' . site_url('project-page/' . $f["url"]) . '">' . $f["name"] . '</a></li>';
	}


	$sorguProducts = query("select *, p.id as id from pcategory as p, pcategory_content as pc where p.id = pc.categoryid and lang={$langcookie} ORDER BY  pc.sort ASC limit 4");
	if (num($sorguProducts) <= 0) {
		$sorguProducts = query("select *, p.id as id from pcategory as p, pcategory_content as pc where p.id = pc.categoryid and lang=1 ORDER BY pc.sort ASC limit 4");
	}

	$recentproducts = "";
	while ($fe = fetch($sorguProducts)) {

		$recentproducts .= '<li class="mb-4 mt-2"><a href="' . site_url('product?category%5B%5D=' . $fe['id']) . '&sda=' . lang('apply') . '">' . $fe["name"] . '</a></li>';
	}
	?>
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-3 pt-5">
				<div class="row text-center text-lg-start">
					<div class="col mb-4">
						<br/>
						<br/>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<p><?= lang('footer-about') ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="social">
							<ul class="list-inline m-0">
								<li class="list-inline-item"><a href="<?= lang('social-facebook') ?>"><i class="fab fa-facebook-f"></i></a></li>
								<li class="list-inline-item"><a href="<?= lang('social-twitter') ?>"><i class="fab fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="<?= lang('social-instagram') ?>"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-9 pt-4 pt-lg-5">
				<div class="row footer-bg">
					<div class="col-6 col-lg p-3 p-lg-5 pt-0 pl-0">
						<h3><?= lang('products') ?></h3>
						<div class="row">
							<div class="col">
								<ul class="list-inline">
									<?= $recentproducts ?>
									<li class="mb-4 mt-2"><a href="<?= site_url('product?category%5B%5D=25&category%5B%5D=26&category%5B%5D=27&category%5B%5D=32&category%5B%5D=33&category%5B%5D=28&category%5B%5D=29&category%5B%5D=30&category%5B%5D=31&sda=APPLY') ?>"><?= lang('all-categories')?></a></li>

								</ul>
							</div>
						</div>
					</div>
					<div class="col-6 col-lg p-3 p-lg-5 pt-0 pl-0">
						<h3><?= lang('recent-projects') ?></h3>
						<div class="row">
							<div class="col">
								<ul class="list-inline">
									<?= $recentprojects ?>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg p-3 p-lg-5 pt-0 pl-0">
						<h3><?= lang('contacts') ?></h3>
						<div class="row">
							<div class="col">
								<ul class="list-inline">
									<li class="mb-4 mt-2"><i class="fas fa-map-marker-alt"></i> <a href="https://goo.gl/maps/ZChoB1ZkuwQAgqmi8" target="_blank"><?= lang('company-address') ?></a></li>
									<li class="mb-4"><i class="far fa-envelope-open"></i> <a href="mailto:<?= lang('company-mail') ?>"><?= lang('company-mail') ?></a></li>
									<li class="mb-4"><i class="fas fa-phone-alt"></i> <a href="tel:<?= lang('company-phone') ?>"><?= lang('company-phone') ?></a></li>
									<li class="mb-4"><i class="fas fa-phone-alt"></i> <a href="tel:<?= lang('company-phone2') ?>"><?= lang('company-phone2') ?></a></li>
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
				<?= lang('copyright') ?>
			</div>
		</div>
	</div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
<script src="<?= asset_url('js/wow.min.js') ?>"></script>
<script src="<?= asset_url('plugin/fontawesome/js/all.js') ?>" charset="utf-8"></script>
<script src="<?= asset_url('plugin/bootstrap5/js/bootstrap.js') ?>" charset="utf-8"></script>
<script src="<?= asset_url('plugin/twentytwenty-master/js/jquery.event.move.js') ?>"></script>
<script src="<?= asset_url('plugin/twentytwenty-master/js/jquery.twentytwenty.js') ?>"></script>
<!-- SLİDER -->
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

	var swiper = new Swiper('.business-container', {
		slidesPerView: 'auto',
		loop: true,
		centeredSlides: true,
		slidesPerView: 2,
		breakpoints: {
			640: {
				slidesPerView: 3,
			},
			840: {
				slidesPerView: 5,
			}
		},
		autoplay: {
			delay: 2500,
			disableOnInteraction: false,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});

	var swiper = new Swiper('.project-page-slider', {
		slidesPerView: 'auto',
		loop: true,
		slidesPerView: 1,
		autoplay: {
			delay: 2500,
			disableOnInteraction: false,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});

	var galleryThumbs = new Swiper('.gallery-thumbs', {
		spaceBetween: 10,
		slidesPerView: 4,
		freeMode: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
	});
	var galleryTop = new Swiper('.gallery-top', {
		spaceBetween: 10,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		thumbs: {
			swiper: galleryThumbs
		}
	});
</script>
<!-- SLİDER -->
<script>
	new WOW().init();

	$(function() {
		$('.lazy').lazy();

		$(".range-img").twentytwenty({
			default_offset_pct: 0.5
		});

		if(window.innerWidth > 768) {
			$(window).on("scroll", function() {
				var top = $("html").scrollTop();
				if (top > 10) {
					$("body").addClass("fixed")
				} else {
					$("body").removeClass("fixed")
				}
			});
		}

		$(".select-language").click(function() {
			if (!$(this).hasClass("active")) {
				$(this).addClass('active');
			} else {
				$(this).removeClass('active');
			}
		});
		
		$(".mobile-filter-button").click(function() {
			var pf = $(".product-filters")
			pf.slideToggle()
		});
	});
</script>

<script>
	$(function() {
		$(".navbar-toggler").click(function(){
			var isActive = $(".navbar-collapse").hasClass("active");
			if(isActive){
				$(".navbar-collapse").animate({right: "-100%"});
				$(".navbar-collapse").removeClass("active");
			}else{
				$(".navbar-collapse").animate({right: 0});
				$(".navbar-collapse").addClass("active");
			}
		});

	})

	$(window).scroll(function() {
	  var top = $(this).scrollTop();
	  
		if(top>500 && top<900){
			$(".baslik").attr("style", "font-size: " + (32 - ((top-500) / 35))+"px");
		  

		}

	});
</script>
</body>

</html>
