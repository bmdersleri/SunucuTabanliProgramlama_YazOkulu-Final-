<?php require_once view('admin/static/header'); ?>

<div class="content-body">
	<div class="container-fluid">
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
					<h4>Team Sort</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<form name="teamSort" method="POST">
					<input type="hidden" name="sort" id="sort" />
					<ul class="row" id="teamlist">
						<?=$htmltut?>
					</ul>
					<input style="margin-top: 10px" type="submit" class="btn btn-primary btn-lg" name="submit" value="Sort Hierarchically" onClick="sirala();" />
				</form>
			</div>
		</div>
	</div>
</div>

<style type="text/css">
	#teamlist li {
		cursor: move;
		list-style-type: none;
		border: solid #ccc 1px;
		padding: 0;
		margin: 10px;
	}

	#teamlist li span:nth-child(2) {
		padding: 10px;
		color: #333;
		display: block;
		background: #fff;
	}

	#teamlist li:hover {
		border-color: #4425CB;
	}

	.padd {
		margin: 3px 0px;
	}
</style>

<?php require_once view('admin/static/footer'); ?>
