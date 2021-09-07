<?php require_once view('admin/static/header'); ?>
<div class="content-body">
	<div class="container-fluid">
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
					<?php if (isset($edit_id)) { ?>
						<h4>Edit Product</h4>
					<?php } else { ?>
						<h4>Add New Product</h4>
					<?php } ?>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<?php if (isset($edit_id)) { ?>
						<li class="breadcrumb-item"><a href="<?=admin_url('product_list')?>">Product</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Edit</a></li>
					<?php } else { ?>
						<li class="breadcrumb-item"><a href="<?=admin_url('product_list')?>">Product</a></li>
						<li class="breadcrumb-item active"><a href="<?=admin_url('product_add')?>">Add</a></li>
					<?php } ?>

				</ol>
			</div>
		</div>
		<div class="row">
			<?php if (isset($success)) { ?>
				<div class="col-lg-12">
					<div class="alert alert-success alert-dismissible alert-alt fade show">
						<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
						</button>
						<strong><?= $success ?></strong>
					</div>
				</div>
			<?php } ?>
			<?php if (isset($error)) { ?>
				<div class="col-lg-12">
					<div class="alert alert-danger alert-dismissible alert-alt fade show">
						<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
						</button>
						<strong><?= $error ?></strong>
					</div>
				</div>
			<?php } ?>
			<div class="col-lg-12">
				<?= $languages ?>
				<div class="card">
					<div class="card-body">
						<div class="form-validation">
							<form class="form-valide" method="post">
								<div class="row">
									<div class="col">
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Language
											</label>
											<div class="col-lg-8"><?= $langName ?></div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label" for="pcategoryid">Category
												<span class="text-danger">*</span>
											</label>
											<?php if ($lang == 1) { ?>
												<select class="col-lg-3 ml-3 btn btn-primary" id="pcategoryid" name="pcategoryid">
													<optgroup label="Select Category">
														<?= $categorygonder ?>
												</select>
											<?php } ?>
											<?php if ($lang > 1) { ?>
												<select class="col-lg-3 ml-3 btn btn-primary" id="pcategoryid" name="pcategoryid">
													<optgroup label="Select Category">
														<?= $categoryselected ?>
												</select>
											<?php } ?>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label" for="name">Product Name
												<span class="text-danger">*</span>
											</label>
											<div class="col-lg-8">
												<input type="text" class="form-control" id="name" name="name" value="<?= $values['name'] ?>" placeholder="Add Product Name">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label" for="content">Product Content
												<span class="text-danger">*</span>
											</label>
											<div class="col-lg-8">
												<textarea class="summernote" name="content" placeholder="Content"><?= $values['content'] ?></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3"></label>
											<div class="col-lg-8 text-right">
												<input type="submit" name="submit" class="btn btn-primary btn-lg" value="SUBMIT" />
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once view('admin/static/footer'); ?>