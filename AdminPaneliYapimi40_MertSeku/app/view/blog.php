<?php require "static/header.php" ?>
<div id="content">
	<div class="title">
		<div class="container">
			<h1>
				<?php
				if ($contentFetch['title']) {
					echo htmlspecialchars_decode($contentFetch['title']);
				} else {
					echo lang('not-found');
				}
				?>
			</h1>
		</div>
	</div>
	<div class="container">
		<pre>
			<?php
			if ($contentFetch['title']) {
				echo htmlspecialchars_decode($contentFetch['content']);
			} else {
				echo '<a href="'.site_url().'"><h5 style="text-align: center; margin-top: 60px">'.lang('home').'</h5></a>';
			}
			?>
		</pre>
	</div>
</div>
<?php require "static/footer.php" ?>
