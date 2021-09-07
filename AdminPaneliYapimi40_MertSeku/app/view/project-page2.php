<?php require "static/header.php" ?>

<!-- SLIDER -->
<div id="slider">
	<div class="swiper-container">
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
<!-- SLIDER -->


<style media="screen">
	.project-page-slider {
		overflow: hidden;
		position: relative;
	}

	.project-info {
		padding-left: 50px;
	}

	.project-info .row {
		border-bottom: 1px solid #eee;
		min-height: 60px;
		align-items: center;
	}

	.project-info .row>.col:first-child {
		text-transform: uppercase;
	}
</style>
<div id="content">
	<div class="title">
		<div class="container">
			<h1><?= $h1 ?></h1>
		</div>
	</div>

	<div class="project-page-slider">
		<div class="swiper-wrapper">
			<?= $photos ?>
		</div>
		<!-- Add Pagination -->
		<div class="swiper-pagination swiper-pagination-white"></div>
		<!-- Add Navigation -->
		<div class="swiper-button-prev swiper-button-white"></div>
		<div class="swiper-button-next swiper-button-white"></div>
	</div>
	<div id="works">
		<div class="container">
			<div class="row g-0 pt-2 projects">
				<div class="col-6 project-info">
					<div class="row text-start">
						<div class="col-4">
							<?= lang('typology') ?>
						</div>
						<div class="col-1">:</div>
						<div class="col">
							<?= $typologyFetch['typology'] ?>
						</div>
					</div>
					<div class="row text-start">
						<div class="col-4">
							<?= lang('city') ?>
						</div>
						<div class="col-1">:</div>
						<div class="col">
							<?= $f['city'] ?>
						</div>

					</div>
				</div>
				<div class="col-6 project-info">
					<div class="row text-start">
						<div class="col-4">
							<?= lang('location') ?>
						</div>
						<div class="col-1">:</div>
						<div class="col">
							<?= $locationFetch['location'] . ' / ' .  $f['country'] ?>
						</div>
					</div>
					<div class="row text-start">
						<div class="col-4">
							<?= lang('year') ?>
						</div>
						<div class="col-1">:</div>
						<div class="col">
							<?= $f['year'] ?>
						</div>
					</div>
				</div>
				<div class="col-6 project-info">
					<div class="row text-start">
						<div class="col-4">
							<?= lang('projectarea') ?>
						</div>
						<div class="col-1">:</div>
						<div class="col">
							<?= $f['projectarea'] ?>
						</div>
					</div>
				</div>
				<div class="col-6 project-info">
					<div class="row text-start">
						<div class="col-4">
							<?= lang('customer') ?>
						</div>
						<div class="col-1">:</div>
						<div class="col">
							<?= $f['customer'] ?>
						</div>
					</div>
				</div>
				<?php
				if (strlen($f['designedby']) > 0) {
					echo '
					<div class="col-12 project-info">
					<div class="row text-start">
						<div class="col-12 text-center">
							'.$f['designedby'].'
						</div>
					</div>
				</div>';
				}


				?>

			</div>
		</div>
	</div>
</div>
<?php require "static/footer.php" ?>