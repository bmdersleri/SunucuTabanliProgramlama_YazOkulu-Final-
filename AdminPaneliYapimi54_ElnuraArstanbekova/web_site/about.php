<?php include "include/header.php"; ?>

	<!-- Navigation -->
	<?php include "include/navigation.php" ?>

	<!--==========================
    INSIDE HERO SECTION Section
============================-->
	<section class="page-image page-image-about md-padding">
		<h1 class="text-white text-center">ABOUT</h1>
	</section>

	<!--==========================
    ABOUTUS Section
============================-->
	<section id="aboutus" class="md-padding">
		<div class="container">
		<?php
						$sorgu = "SELECT * FROM about";						
						$select_all_categories = mysqli_query($conn,$sorgu); 
						while($row = mysqli_fetch_assoc($select_all_categories))
						{							
							$post_id = $row["id"];	
							$about_title = $row["title"];	
							$about_contents = $row["contents"];	
							$about_image = $row["image1"];		

							
							echo "<div class='row text-center'>
							<div class='col-md-4 offset-md-4'>
					<div class='ection-header'>
						<h2 class='title'>$about_title</h2>
					</div>
				</div>
			</div>
			<div class='row justify-content-center no-gutters mb-5 mb-lg-0'>
				<div class='col-md-6'>
					<img class='img-fluid' src='$about_image' alt=''>
				</div>
				<div class='col-md-6'>
					<div class='bg-main text-center h-100 project'>
						<div class='d-flex h-100'>
							<div class='project-text w-100 my-auto text-center text-lg-left'>
								<p class='mb-3 text-white'>$about_contents</p>

							</div>
						</div>
					</div>
				</div>
			</div>
							
							
							
							";
							
						}	

					?>

			
		</div>
	</section>

	<!--==========================
    THE TEAM
============================-->


	<?php include "include/footer.php"; ?>