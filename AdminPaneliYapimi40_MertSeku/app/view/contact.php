<?php require "static/header.php";?>
<div id="content">
	<div class="title">
		<div class="container">
			<h1><?=$h1?></h1>
		</div>
	</div>
	<div class="row">
		<div class="col">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3018.422763850591!2d33.281872514777454!3d40.84064103767369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40839ef3002c31fb%3A0x453a15245c4759ae!2zw4dhbmvEsXLEsSBLdXLFn3VubHUgVE9LxLAgS29udXRsYXLEsSwgMTgzMDAgQmVyZWtldC9LdXLFn3VubHUvw4dhbmvEsXLEsQ!5e0!3m2!1str!2str!4v1630938618197!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</div>
	<div class="container pt-5">
		<style>
			.address-info {
				padding: 20px;
				margin: 20px 15px;
			}

			.address-row {
				padding-left: 80px;
				position: relative;
				margin-bottom: 50px;
			}

			.address-row svg {
				font-size: 3em;
				float: left;
				position: absolute;
				top: 50%;
				left: 10px;
				transform: translateY(-50%);
				color: #333;
			}

			.address-row h2 {
				color: #555;
				font-size: 1.5em;
				font-weight: 600;
			}

			.address-row address {
				color: #555;
				padding-right: 35px;
			}

			.address-row a {
				color: #555;
				text-decoration: none;
			}

			.address-row a:hover {
				color: #222;
			}
			.form-control {
				font-size: .9em;
				border-radius: 2px;
				padding: 15px;
				box-shadow: none!important;
			}

			.btn {
				font-size: .9em;
				border-radius: 2px;
				box-shadow: none!important;
				padding: 12px 25px;
				width: 100%;
			}
		</style>
		<div class="row">
			<div class="col-12 col-lg-5 address-info">
				<div class="address-row">
					<i class="fa fa-map-marker-alt"></i>
					<h2><?=lang('contact-location')?></h2>
					<address>
						<a href="https://goo.gl/maps/9j4CtYXFJVMJRURu8" target="_blank">
						<?=lang('company-address')?>
						</a>
					</address>
				</div>

				<div class="address-row">
					<i class="fa fa-phone"></i>
					<h2><?=lang('phoneandfax')?></h2>
					<a href="tel:<?=lang('company-phone')?>">
						<?=lang('company-phone')?>
					</a>
					</br>
					</br>
					<a href="tel:<?=lang('company-phone2')?>">
						<?=lang('company-phone2')?>
					</a>
				</div>	
							
				<div class="address-row">
					<i class="fa fa-envelope"></i>
					<h2><?=lang('mail')?></h2>
					<a href="mailto:<?=lang('company-mail')?>">
						<?=lang('company-mail')?>
					</a>
				</div>
			</div>
			<div class="col">
				<?php echo isset($success) ? success($success): null;?>
				<?php echo isset($error) ? error($error): null;?>
				<form action="" method="post">
					<div class="row pt-4">
						<div class="col-4">
							<label for="name" class="form-label"><?=lang('name')?></label>
						</div>
						<div class="col-8">
							<input type="text" class="form-control" name="name" placeholder="<?=lang('name-placeholder')?>" value="<?=$contact_name ?? ""?>">
						</div>
					</div>
					<div class="row pt-4">
						<div class="col-4">
							<label for="mail" class="form-label"><?=lang('mail')?></label>
						</div>
						<div class="col-8">
							<input type="text" class="form-control" name="mail" placeholder="<?=lang('mail-placeholder')?>" value="<?=$contact_mail ?? ""?>">
						</div>
					</div>
					<div class="row pt-4">
						<div class="col-4">
							<label for="phone" class="form-label"><?=lang('phone')?></label>
						</div>
						<div class="col-8">
							<input type="text" class="form-control" name="phone" placeholder="<?=lang('phone-placeholder')?>" value="<?=$contact_phone ?? ""?>">
						</div>
					</div>
					<div class="row pt-4">
						<div class="col-4">
							<label for="subject" class="form-label"><?=lang('subject')?></label>
						</div>
						<div class="col-8">
							<input type="text" class="form-control" name="subject" placeholder="<?=lang('subject-placeholder')?>" value="<?=$contact_subject ?? ""?>">
						</div>
					</div>
					<div class="row pt-4">
						<div class="col-4">
							<label for="message" class="form-label"><?=lang('message')?></label>
						</div>
						<div class="col-8">
							<textarea class="form-control" name="message" placeholder="<?=lang('message-placeholder')?>" rows="4" cols="80"><?=$contact_message ?? ""?></textarea>
						</div>
					</div>
					<div class="row pt-3 justify-content-end">
						<div class="col-5">
							<input type="submit" class="btn btn-outline-dark" name="submit" value="<?=lang('submit-btn')?>">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php require "static/footer.php";?>
