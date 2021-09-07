<?php require "static/header.php"?>
<div id="content">
	<div class="title">
		<div class="container">
			<h1><?=$h1?></h1>
		</div>
	</div>
	<div id="works">
		<div class="container">
			<div class="page-filters">
				<ul class="choose-filter">
					<li>
						<a href="#"><?=$activeTypology ?? lang('typology')?> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
						<ul class="options">
							<?=$typology?>
						</ul>
					</li>
					<li>
						<a href="#"><?=$activeLocation ?? lang('location')?> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
						<ul class="options">
							<?=$location?>
						</ul>
					</li>
					<li>
						<a href="#"><?=$activeYear ?? lang('year')?> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
					<ul class="options">
						<?=$years?>
					</ul>
				</li>
				</ul>
			</div>
			<div class="row g-3 pt-2 projects">
				<?=$projects?>
				<?php if($projects == ""){?>
					<div class="non-item">
						<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
						<span><?=lang("no-project-found")?></span>
					</div>
				<?php }?>
			</div>
		</div>
	</div>
</div>
<?php require "static/footer.php"?>
