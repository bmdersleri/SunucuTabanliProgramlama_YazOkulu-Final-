<?php require "static/header.php" ?>
<style media="screen">
	.product-page-slider {
		overflow: hidden;
		position: relative;
	}

	.product-info {
		padding-left: 50px;
	}

	.product-info .row {
		border-bottom: 1px solid #eee;
		min-height: 60px;
		align-items: center;
	}

	.product-info .row>.col:first-child {
		text-transform: uppercase;
	}

	.subtitle {
		margin-top: 2em;
		font-size: 22px;
		text-align: left;
		padding: 15px 10px 25px 10px!important;
		background: #2e2e2e;
		width: 200px;
		text-align: center;
		float: left;
		margin-bottom: -5px;
		color: #fff;
		border-radius: 3px;
	}

	table {
		border-radius: 5px;
		overflow: hidden;
		text-indent: 10px;
		background: #2e2e2e;
		color: #fff;
		border:1px solid #333!important;
	}

	table thead {
		color: #fff;
		border-bottom:2px solid  #3a3a3a;
		margin-bottom: 20px!important;
		font-weight: 600;
		text-transform: uppercase;
	}

	table th {
		padding: 25px 0 20px!important;
		margin-bottom: 30px!important
	}


	table td {
		padding: 15px 0 10px!important;
		color: #fff;
	}
	.swiper-container {
	width: 100%;
	height: 300px;
	margin-left: auto;
	margin-right: auto;
	}

	.swiper-slide {
	background-size: cover;
	background-position: center;
	}

	.gallery-top {
	height: 80%;
	width: 100%;
	}

	.gallery-thumbs {
	height: 20%;
	box-sizing: border-box;
	padding: 10px 0;
	}

	.gallery-thumbs .swiper-slide {
	width: 25%;
	height: 100%;
	opacity: 0.4;
	}

	.gallery-thumbs .swiper-slide-thumb-active {
	opacity: 1;
	}
</style>
<div id="content">
	<div class="title">
		<div class="container">
			<h1>PRODUCT</h1>
		</div>
	</div>
	<img src="" class="w-100" alt="">
	<div id="works">
		<div class="container">
			<div class="row g-0 pt-2 products">
				<div class="col-12 col-lg-5">
					<!-- Swiper -->
						<div class="swiper-container gallery-top">
							<div class="swiper-wrapper">
								<div class="swiper-slide" style="background-image:url('http://localhost/sthetics//assets/upload/product/5/4MyrA6rALq.jpg')"></div>
							</div>
							<!-- Add Arrows -->
							<div class="swiper-button-next swiper-button-white"></div>
							<div class="swiper-button-prev swiper-button-white"></div>
						</div>
						<div class="swiper-container gallery-thumbs">
							<div class="swiper-wrapper">
								<div class="swiper-slide" style="background-image:url('http://localhost/sthetics//assets/upload/product/5/4MyrA6rALq.jpg')"></div>
							</div>
						</div>
				</div>
				<div class="col-12 col-lg-7 pt-3 pt-lg-0 product-info">
					<div class="row text-start">
						<div class="col-4">
							Product Name
						</div>
						<div class="col-1">:</div>
						<div class="col">
							BAŞLIK
						</div>
					</div>
					<div class="row text-start">
						<div class="col-4">
							Product typology
						</div>
						<div class="col-1">:</div>
						<div class="col">
							Product typology
						</div>
					</div>
					<div class="row text-start">
						<div class="col-4">
							Product location
						</div>
						<div class="col-1">:</div>
						<div class="col">
							Product location
						</div>
					</div>
					<div class="row text-start">
						<div class="col-4">
							Product city
						</div>
						<div class="col-1">:</div>
						<div class="col">
							Product city
						</div>
					</div>
					<div class="row text-start">
						<div class="col-4">
							Colors
						</div>
						<div class="col-1">:</div>
						<div class="col">
							<div class="colors row">
								<div class="col-2">
									<img src="http://localhost/sthetics//assets/upload/product/5/4MyrA6rALq.jpg" alt="">
								</div>
								<div class="col-2">
									<img src="http://localhost/sthetics//assets/upload/product/5/4MyrA6rALq.jpg" alt="">
								</div>
								<div class="col-2">
									<img src="http://localhost/sthetics//assets/upload/product/5/4MyrA6rALq.jpg" alt="">
								</div>
								<div class="col-2">
									<img src="http://localhost/sthetics//assets/upload/product/5/4MyrA6rALq.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="row text-start">
						<div class="col-4">
							Product year
						</div>
						<div class="col-1">:</div>
						<div class="col">
							Product year
						</div>
					</div>
					<div class="row text-start">
						<div class="col-4">
							Product customer
						</div>
						<div class="col-1">:</div>
						<div class="col">
							Product customer
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<h2 class="subtitle">Özellikler</h2>
				<table class="table">
					<thead>
						<th>Başlık</th>
						<th>İçerik</th>
						<th>Karşılığı</th>
					</thead>
					<tbody>
						<tr>
							<td>Başlık</td>
							<td>İçerik</td>
							<td>Karşılığı</td>
						</tr>
						<tr >
							<td>Başlık</td>
							<td>İçerik</td>
							<td>Karşılığı</td>
						</tr>
						<tr>
							<td>Başlık</td>
							<td>İçerik</td>
							<td>Karşılığı</td>
						</tr>
						<tr>
							<td>Başlık</td>
							<td>İçerik</td>
							<td>Karşılığı</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php require "static/footer.php" ?>
