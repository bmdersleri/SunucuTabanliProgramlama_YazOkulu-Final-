<?php require_once view('admin/static/header'); ?>
<div class="content-body">
	<div class="container-fluid">
		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
					<h4>Read Message</h4>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?=admin_url('inbox_list')?>">Inbox</a></li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="form-validation">
							<form class="form-valide" method="post">
								<div class="row">
									<div class="col">
										<div class="form-group row">
											<label class="col-lg-3 col-form-label" for="name">Name Surname
											</label>
											<div class="col-lg-8">
												<?= $values['name'] ?>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label" for="phone">Phone
											</label>
											<div class="col-lg-8">
												<?=$values['phone']?>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label" for="mail">Mail
											</label>
											<div class="col-lg-8">
												<?=$values['mail']?>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label" for="subject">Subject
											</label>
											<div class="col-lg-8">
												<?=$values['subject']?>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label" for="message">Message
											</label>
											<div class="col-lg-8">
												<?=$values['message']?>
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
