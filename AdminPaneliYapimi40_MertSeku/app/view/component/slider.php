<?php
$sliderQuery = query("select * from slider_content where lang={$langcookie} order by sort asc");
if (num($sliderQuery) <= 0) {
	$sliderQuery = query("select * from slider_content where lang=1 order by sort asc");
}
?>
<!-- SLIDER -->
<div id="slider">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<?php
			while ($sliderF = fetch($sliderQuery)) {
				$photoQ = fetch(query("select src from slider where id=" . $sliderF['sliderid']));
			?>
				<div class="swiper-slide">
					<div class="parallax-bg" style="background-image: url(<?= site_url($photoQ['src']) ?>)" data-swiper-parallax="-23%"></div>
					<div class="title" data-swiper-parallax="-300"><?= $sliderF['title'] ?></div>
					<div class="subtitle" data-swiper-parallax="-200"><?= $sliderF['subtitle'] ?>
			</br>
			<?php
			if ($sliderF['content'] != "designed by STUDIOVERTEBRA") {
				echo '<div data-swiper-parallax="-100">
				<p style="font-size: 17px">'.$sliderF['content'].'</p>				
			</div>';					
		}
			?>
				</div>
					<?php
					if ($sliderF['content'] == "designed by STUDIOVERTEBRA") {
						echo '<div class="text" data-swiper-parallax="-100">
						<p>' . $sliderF['content'] . '</p>
						<p style="text-align: right;">' . $sliderF['designedby'] . '</p>
					</div>';
					}					
					?>
					
				</div>
			<?php } ?>
		</div>
		<!-- Add Pagination -->
		<div class="swiper-pagination swiper-pagination-white"></div>
		<!-- Add Navigation -->
		<div class="swiper-button-prev swiper-button-white"></div>
		<div class="swiper-button-next swiper-button-white"></div>
	</div>
</div>
<!-- SLIDER -->