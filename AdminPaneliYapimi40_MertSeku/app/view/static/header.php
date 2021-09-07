<?php
require 'head.php';
if (!isset($_menu)) {
	$_menu = " dark";
}
?>

<body>
	<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light<?= $_menu ?>">
				<div class="container-fluid">
					<a class="navbar-brand" href="<?= site_url() ?>">
						<span class="white"><img src="<?= asset_url('img/Logo_K.svg') ?>" alt=""></span>
						<span class="black"><img src="<?= asset_url('img/Logo_K.svg') ?>" alt=""></span>
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end">
						<ul class="navbar-nav mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="<?= site_url() ?>"><?= lang('home') ?></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?= site_url('about-us') ?>"><?= lang('aboutus') ?></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?= site_url('team') ?>"><?= lang('team') ?></a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="<?= site_url('product') ?>"><?= lang('products') ?></a>
								<ul>
									<?php
									$_menuProjectQuery = query("select *, p.id as id from pcategory as p, pcategory_content as pc where p.id = pc.categoryid and lang={$langcookie} ORDER BY pc.sort ASC");
									if (num($_menuProjectQuery) <= 0) {
										$_menuProjectQuery = query("select *, p.id as id from pcategory as p, pcategory_content as pc where p.id = pc.categoryid and lang=1 ORDER BY pc.sort ASC");
									}
									while ($row = fetch($_menuProjectQuery)) {
										echo '<li>
												<a href="' . site_url('product?category%5B%5D=' . $row['id']) . '&sda=' . lang('apply') . '">
													<span class="hover">
														<span>' . $row['name'] . '</span>
													</span>
												</a>
											</li>';
									}
									?>									
								</ul>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="<?= site_url('project') ?>"><?= lang('portfolio') ?></a>
								<ul>
									<li>
										<a href="<?= site_url('project') ?>">
											<span class="hover">
												<span><?= lang('all-projects') ?></span>
											</span>
										</a>
									</li>
									<?php
									$_menuProjectQuery = query("select *, t.id as id from typology as t, typology_content as tc where t.id = tc.typologyid and lang={$langcookie}");
									if (num($_menuProjectQuery) <= 0) {
										$_menuProjectQuery = query("select *, t.id as id from typology as t, typology_content as tc where t.id = tc.typologyid and lang=1");
									}
									while ($row = fetch($_menuProjectQuery)) {
										echo '<li>
												<a href="' . site_url('project?typology=' . $row['id']) . '">
													<span class="hover">
														<span>' . $row['typology'] . '</span>
													</span>
												</a>
											</li>';
									}
									?>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?= site_url('contact') ?>"><?= lang('contacts') ?></a>
							</li>
							<li class="social">
								<ul class="list-inline m-0">
									<li class="list-inline-item"><a href="<?= lang('social-facebook') ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
									<li class="list-inline-item"><a href="<?= lang('social-twitter') ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="<?= lang('social-instagram') ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</li>
							<li class="nav-item select-language">
								<ul>
									<?=$langList?>
								</ul>
								<span><?= $activeLang ?></span>
								<span class="pr-5"><i class="fas fa-angle-down"></i></span>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>