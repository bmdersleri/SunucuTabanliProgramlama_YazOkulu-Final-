<?php
$sorgu = query("select * from business_partners");
$photos = "";
while ($businessPartners = fetch($sorgu)) {
	$photos .= '
						<div class="swiper-slide"><a href="' . $businessPartners['link']  . '" target="_blank"><img src="' . site_url($businessPartners['src']) . '" alt=""></a></div>';
}
?>
<div class="partner">
	<h2><?= lang('business-partner') ?></h2>
	<div class="container">
		<div class="business-container">
			<div class="swiper-wrapper">
				<?= $photos ?>
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination swiper-pagination-white"></div>
			<!-- Add Navigation -->
			<div class="swiper-button-prev swiper-button-white"></div>
			<div class="swiper-button-next swiper-button-white"></div>
		</div>
	</div>
	<h2 class="baslik"><?= lang('slogan') ?></h2>
</div>
<style>
	.partner {
		padding: 20px 0 0;
		background: #eee;
	}

	.partner {
		background-repeat: no-repeat;
		background-attachment: scroll;
		background-size: 100%;
		background-blend-mode: lighten;
		background-image: url(assets/img/partner_pattern.png);
		background-position: center;
		background-size: 200% 200%;
		background-position: right;
	}

	.partner img {
		max-height: 25px;
		filter: grayscale(0);
		transition: 400ms all;
	}

	.partner img:hover {
		filter: grayscale(0);
		transform: scale(1.2);
	}

	.partner h2 {
		padding: 30px 0 40px;
		text-align: center;
		display: block;
		font-weight: 600;
		letter-spacing: .5em;
		color: #5e5e5e;
	}

	.partner .container {
		background: white;
		padding: 40px 40px;
		overflow: hidden;
		border-radius: 5px;
		box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.05);
	}

	.partner .business-container {
		width: 100%;
		padding-top: 10px;
		padding-bottom: 10px;
		overflow: hidden;
		position: relative;
	}

	.partner .swiper-slide {
		background-position: center;
		background-size: cover;
		text-align: center;
	}
	h2.baslik {
		padding-bottom: 0;
		margin-bottom: 0;
		margin-top: 5rem;

	}
</style>
