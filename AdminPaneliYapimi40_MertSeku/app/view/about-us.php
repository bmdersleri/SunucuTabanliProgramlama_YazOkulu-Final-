<?php require "static/header.php" ?>
<div id="content">
	<div class="title">
		<div class="container">
			<h1><?= $h1 ?></h1>
		</div>
	</div>
	<div class="container">
		<div class="row pt-lg-5" style="font-size: 17px; line-height: 1.6em;text-align: justify;">	
				<pre class="text-left"><?= htmlspecialchars_decode($contentFetch['content']); ?></pre>	
		</div>
	</div>
</div>
<?php require "static/footer.php" ?>