<?php header("HTTP/1.0 404 Not Found"); ?>
<?php require 'static/head.php'; ?>
<?php require "static/navigation.php" ?>
<?php require 'static/header.php'; ?>
<div id="content">
	<div class="width">
		<div class="not">
			<h1 style="text-align: center; margin-top: 100px">ERROR 404</h1>
			<a href="<?= site_url() ?>" class="btn" style="font-size: 30px">
				<div style="text-align: center;">
					HOMEPAGE
					
			</a>
		</div>
	</div>
	<div class="t"></div>
</div>
<?php require 'static/footer.php'; ?>