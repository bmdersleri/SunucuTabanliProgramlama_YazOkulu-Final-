<div id="works">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2>OUR PROJECTS</h2>
				<p>We build and develop the future environment for working, living and communication. We take on projects with the intention of finding smart, new solutions to problems, large and small. Our project portfolio is diverse by geography, sectors and capabilities. We are proud of the projects we have safely and expertly delivered for our clients and are proud of our current roster of dynamic projects.</p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="filters">
					<ul class="list-inline d-flex justify-content-between">
						<li class="list-inline-item">ALL PROJECTS</li>
						<li class="list-inline-item">RESIDENTIAL PROJECTS</li>
						<li class="list-inline-item active">COMMERCIAL PROJECTS</li>
						<li class="list-inline-item">PUBLIC PROJECTS</li>
						<li class="list-inline-item">RELIGIOUS BUILDINGS</li>						
					</div>
				</div>
			</div>
			<div class="row gy-4 pt-5 projects">
				<?php
				$names = ['Tashkent Mıxed Project', 'Dnıpro Hotel', 'Dar-Es-Salaam-Complex', 'Tashkent Mıxed Project', 'Bukhara Cıty', 'Canada Islamıc Center', 'New Marwa Hospıtal', 'Kaz Gölü Tokat', 'Bukhara Cıty', 'Project Names 10'];
					for($i = 1; $i <= 9; $i++){
				?>
				<div class="col-4">
					<a href="#" class="card">
						<span class="img">
							<img src="assets/img/project/<?=$i?>.jpg" alt="">
						</span>
						<span class="card-body">
							<p class="card-text"><?=$names[$i-1]?></p>
						</span>
					</a>
				</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>
</div>

<div id="project">
	<div class="row g-0 projects">
		<?php
			$names = ['Tower 1', 'Tower 2', 'Tower 3', 'Tower 4', 'Tower 5', 'Tower 6', 'Project Names 7', 'Project Names 8', 'Project Names 9', 'Project Names 10'];
			for($i = 1; $i <= 4; $i++){
		?>
		<div class="col-3">
			<a href="#" class="card">
				<span class="img">
					<img src="assets/img/project-half/<?=$i?>.png" alt="">
				</span>
				<span class="card-body">
					<i class="fab fa-buffer"></i>
					<span><?=$names[$i]?></span>
					<span class="btn  sthetics-bg sthetics-border float-end">View <i class="fas fa-angle-double-right"></i></span>
				</span>
			</a>
		</div>
		<?php
			}
		?>
	</div>
</div>
