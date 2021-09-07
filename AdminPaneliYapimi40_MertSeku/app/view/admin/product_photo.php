<?php require_once view('admin/static/header');?>

<div class="content-body">
	<div class="container-fluid">
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
					<h4><?=$h1?></h4>
				</div>
			</div>

		</div>
		<div class="row">
			<div class="col-lg-12">
				<?php if(isset($success)){?>
					<div class="col-lg-12">
						<div class="alert alert-success alert-dismissible alert-alt fade show">
							<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
							</button>
							<strong><?=$success?></strong>
						</div>
					</div>
					<?php }?>
					<?php if(isset($error)){?>
					<div class="col-lg-12">
						<div class="alert alert-danger alert-dismissible alert-alt fade show">
							<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
							</button>
							<strong><?=$error?></strong>
						</div>
					</div>
					<?php }?>
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-3">
								<form id="addimage" action="<?=site_url('ajax?yukle=product&id=' . $id . '&dir=' . $id)?>" method="post" enctype="multipart/form-data">
									<input type="file" name="dosya">
									<input type="submit" name="submit" value="GÖNDER" ></input>
								</form>
								<div class="upload-btn">CHOOSE PHOTO</div>
								<div class="error"></div>
								<div class="loading">
									<span></span>
								</div>
							</div>
							<div class="col-lg-9">
							<h5 style="margin-left: 8px; color: #593BDB"><?= $h2 ?></h5>
								<form name="photoSort" method="POST">
									<input type="hidden" name="sort" id="sort" />
									<div class="upload-photos" id="photos">									
										<?= $photos ?>
									</div>
									<input style="margin-top: 10px" type="submit" class="btn btn-primary btn-lg" name="submit" value="Sort Photo" onClick="photosirala();" />

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require_once view('admin/static/footer');?>
