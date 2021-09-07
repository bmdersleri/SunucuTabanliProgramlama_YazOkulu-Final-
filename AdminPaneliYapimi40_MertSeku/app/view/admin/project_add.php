<?php require_once view('admin/static/header');?>
<div class="content-body">
	<div class="container-fluid">
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
				<?php if(isset($edit_id)){?>
						<h4>Edit Project</h4>
					<?php }else{?>
						<h4>Add New Project</h4>
					<?php }?>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
				<?php if(isset($edit_id)){?>
						<li class="breadcrumb-item"><a href="<?=admin_url('project_list')?>">Project</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Edit</a></li>
					<?php }else{?>
						<li class="breadcrumb-item"><a href="<?=admin_url('project_list')?>">Project</a></li>
						<li class="breadcrumb-item active"><a href="<?=admin_url('project_add')?>">Add</a></li>
					<?php }?>
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
				<?=$languages?>
				<div class="card">
					<div class="card-body">
						<div class="form-validation">
							<form class="form-valide" method="post">
								<div class="row">
									<div class="col">
									<div class="form-group row">
											<label class="col-lg-3 col-form-label" for="name">Name
												<span class="text-danger">*</span>
											</label>
											<div class="col-lg-8">
												<input type="text" class="form-control" id="name" name="name" value="<?=$values['name']?>" placeholder="Add Project Name">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Language
											</label>
											<div class="col-lg-8"><?=$langName?></div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label" for="typology">Typology
												<span class="text-danger">*</span>
											</label>
											<?php if($lang==1){?>
														<select class="col-lg-3 ml-3 btn btn-primary" id="typology" name="typology">
															<optgroup label="Select Typology">
															<?=$typologygonder?>
														</select>
													<?php }?>
													<?php if($lang>1){?>
														<select class="col-lg-3 ml-3 btn btn-primary" id="typology" name="typology">
															<optgroup label="Select Typology">
															<?=$typologyselected?>
														</select>
													<?php }?>

										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label" for="location">Location
												<span class="text-danger">*</span>
											</label>
											<?php if($lang==1){?>
													<select class="col-lg-3 ml-3 btn btn-primary" id="location" name="location">
														<optgroup label="Select Location">
														<?=$locationgonder?>
													</select>
													<?php }?>
													<?php if($lang>1){?>
														<select class="col-lg-3 ml-3 btn btn-primary" id="location" name="location">
															<optgroup label="Select Location">
															<?=$locationselected?>
														</select>
													<?php }?>

										</div>
											<div class="form-group row">
												<label class="col-lg-3 col-form-label" for="city">City
													<span class="text-danger">*</span>
												</label>
												<div class="col-lg-8">
													<?php if($lang==1){?>
														<input type="text" class="form-control" id="city" name="city" value="<?=$values['city']?>" placeholder="Add City">
													<?php }?>
													<?php if($lang>1){?>
														<input type="text" class="form-control" id="city" name="city" value="<?=$values['city']?>" readonly placeholder="Add City">
													<?php }?>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 col-form-label" for="year">Year
													<span class="text-danger">*</span>
												</label>
												<div class="col-lg-8">
												<?php if($lang==1){?>
													<input type="number" class="form-control" id="year" name="year" value="<?=$values['year']?>" placeholder="Add Year">
												<?php }?>
												<?php if($lang>1){?>
													<input type="number" class="form-control" id="year" name="year" value="<?=$values['year']?>" readonly placeholder="Add Year">
												<?php }?>
												</div>
											</div>

											<div class="form-group row">
											<label class="col-lg-3 col-form-label" for="projectarea">Project Area
												<span class="text-danger">*</span>
											</label>
											<div class="col-lg-8">
												<?php if($lang==1){?>
													<input type="text" class="form-control" id="projectarea" name="projectarea" value="<?=$values['projectarea']?>" placeholder="Add Project Area">
												<?php }?>
												<?php if($lang>1){?>
													<input type="text" class="form-control" id="projectarea" name="projectarea" value="<?=$values['projectarea']?>" readonly placeholder="Add Project Area">
												<?php }?>
											</div>
											</div>


										<div class="form-group row">
											<label class="col-lg-3 col-form-label" for="customer">Customer
												<span class="text-danger">*</span>
											</label>
											<div class="col-lg-8">
												<input type="text" class="form-control" id="customer" name="customer" value="<?=$values['customer']?>" placeholder="Add Customer">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label" for="customer">Country
												<span class="text-danger">*</span>
											</label>
											<div class="col-lg-8">
												<input type="text" class="form-control" id="country" name="country" value="<?=$values['country']?>" placeholder="Add Country">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label" for="customer">Designed by
												<span class="text-danger">*</span>
											</label>
											<div class="col-lg-8">
												<input type="text" class="form-control" id="designedby" name="designedby" value="<?=$values['designedby']?>" placeholder="Add Designer">
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
