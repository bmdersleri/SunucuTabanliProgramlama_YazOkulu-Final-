<?php require_once view('admin/static/header');?>
<div class="content-body">
	<div class="container-fluid">
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">					
						<h4>Add New Blog</h4>					
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?=admin_url('blog_list')?>">Blog</a></li>
					<li class="breadcrumb-item active"><a href="<?=admin_url('blog_add')?>">Add</a></li>
				</ol>
			</div>
		</div>
		<div class="row">
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
			<div class="col-lg-12">				
				<div class="card">
					<div class="card-body">
						<div class="form-validation">
							<form class="form-valide" method="post">
								<div class="row">
									<div class="col">
										<div class="form-group row">
											<label class="col-lg-3 col-form-label" for="title">Title
												<span class="text-danger">*</span>
											</label>
											<div class="col-lg-8">
												<input type="text" class="form-control" id="baslik" name="baslik" value="<?=$values['baslik']?>" placeholder="Enter a title">
											</div>
										</div>	
										<div class="form-group row">
											<label class="col-lg-3 col-form-label" for="icerik">Content
												<span class="text-danger">*</span>
											</label>
											<div class="col-lg-8">
												<textarea class="summernote" name="icerik" placeholder="icerik"><?=$values['icerik']?></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3"></label>
											<div class="col-lg-8 text-right">
												<input type="submit" name="submit" class="btn btn-primary btn-lg" value="SUBMIT"/>
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

<?php require_once view('admin/static/footer');?>
