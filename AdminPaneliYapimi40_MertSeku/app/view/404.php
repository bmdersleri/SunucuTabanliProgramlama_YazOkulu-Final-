<?php header("HTTP/1.0 404 Not Found"); ?>
<?php require 'static/header.php'; ?>
<div id="content">
	<div class="width">
		<div class="not">
			<h1 style="text-align: center; margin-top: 100px"><?= lang('error-404-message') ?></h1>
			<a href="<?= site_url() ?>" class="btn" style="font-size: 30px">
				<div style="text-align: center;">
					<?= lang('home') ?>
					
			</a>
		</div>
	</div>
	<div class="t"></div>
</div>
<?php require 'static/footer.php'; ?>