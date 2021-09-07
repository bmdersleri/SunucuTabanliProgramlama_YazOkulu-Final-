<?php require_once view('admin/static/header'); ?>

<div class="content-body">
	<div class="container-fluid">
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
					<h4>Typology</h4>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<form action="" method="get">
					<div class="row">
						<div class="col-8 p-0 pr-2 m-0">
							<input type="text" class="form-control" id="search" name="search" placeholder="Search" value="<?= get('search') ?>" />
						</div>
						<div class="col-4 p-0 m-0">
							<button type="submit" class="btn btn-primary btn-lg p-1 pr-2 pl-2" style="margin-top: 1px;"><i class="fa fa-search"></i></button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<?php if (isset($deleteSuccess)) { ?>
				<div class="col-lg-12">
					<div class="alert alert-success alert-dismissible alert-alt fade show">
						<a href="<?= admin_url('blog_list') ?>" class="close h-100"><span><i class="mdi mdi-close"></i></span>
						</a>
						<strong><?= $deleteSuccess ?></strong>
					</div>
				</div>
			<?php } ?>
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table header-border table-responsive-sm">
								<thead class="text-muted">
									<tr>
										<th>#</th>
										<th>SRC</th>
										<th>Photo</th>
										<th>Typology</th>
										<th>Content</th>
										<th>Date</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?= $html ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<?= $pages ?>
		</div>
	</div>
</div>

<?php require_once view('admin/static/footer'); ?>