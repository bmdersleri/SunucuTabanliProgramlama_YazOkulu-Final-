<?php require "static/header.php" ?>
<div id="content">
	<div class="title">
		<div class="container">
			<h1><?= $h1 ?></h1>
		</div>
	</div>
	<div id="product">
		<div class="container">
			<div class="row g-3 pt-2">
				<div class="col-12 col-lg-3">
					<form method="GET">
						<h2><?= lang('product-category') ?> <small class="mobile-filter-button"><i class="fa fa-filter"></i></small></h2>
						<div class="product-filters">
							<?= $categories ?>
							<input type="submit" name="sda" value="<?= lang('apply') ?>" class="btn">
						</div>
					</form>
				</div>

				<div class="col-12 col-lg-9">
					<div class="row">
						<?= $products ?>
						<?php if ($products == "") { ?>
							<div class="non-item">
								<p class="text-center">
									<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
								</p>
								<span class="text-center"><?= lang("no-product-found") ?></span>
							</div>
						<?php } ?>
					</div>
				</div>


			</div>
		</div>
	</div>
</div>
</div>
<?php require "static/footer.php" ?>