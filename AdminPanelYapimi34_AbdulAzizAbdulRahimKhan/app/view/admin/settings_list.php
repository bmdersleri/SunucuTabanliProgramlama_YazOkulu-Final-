<?php require_once view('admin/static/header');?>

<div class="content-body">
	<div class="container-fluid">
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
					<h4>Settings</h4>
				</div>
			</div>			
		</div>
		<div class="row">
			<?php if(isset($deleteSuccess)){?>
			<div class="col-lg-12">
				<div class="alert alert-success alert-dismissible alert-alt fade show">
					<a href="<?=admin_url('blog_list')?>" class="close h-100"><span><i class="mdi mdi-close"></i></span>
					</a>
					<strong><?=$deleteSuccess?></strong>
				</div>
			</div>
			<?php }?>
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table header-border table-responsive-sm">
								<thead class="text-muted">
									<tr>										
										<th>Name</th>
										<th>Description</th>										
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?=$html?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require_once view('admin/static/footer');?>
