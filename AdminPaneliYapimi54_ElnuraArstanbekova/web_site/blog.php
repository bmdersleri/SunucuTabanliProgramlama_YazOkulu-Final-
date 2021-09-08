<?php include "include/header.php"; ?>

	<!-- Navigation -->
	<?php include "include/navigation.php" ?>

	

	<!--==========================
    INSIDE HERO SECTION Section
============================-->
	<section class="page-image page-image-blog md-padding">
		<h1 class="text-white text-center">BLOG</h1>
	</section>

	<!--==========================
    Contact Section
============================-->
	<section id="blog" class="md-padding">
		<div class="container">
			<div class="row">
				<main id="main" class="col-md-8">
					<div class="row">	

					<?php
						$sorgu = "SELECT * FROM posts";						
						$select_all_categories = mysqli_query($conn,$sorgu); 
						while($row = mysqli_fetch_assoc($select_all_categories))
						{							
							$post_id = $row["post_id"];	
							$post_category_id = $row["post_category_id"];	
							$post_title = $row["post_title"];	
							$post_author = $row["post_author"];	
							$post_date = $row["post_date"];	
							$post_comment_number = $row["post_comment_number"];	
							$post_image = $row["post_image"];		
							$post_text = substr($row["post_text"],0,200);	
							$post_tags = $row["post_tags"];		
							
							echo "
							<div class='col-md-6'>
							<div class='blog'>
								<div class='blog-img'>
									<img src='$post_image' class='img-fluid'>
								</div>
								<div class='blog-content'>
									<ul class='blog-meta'>
										<li><i class='fas fa-users'></i><span class='writer'>$post_author</span></li>
										<li><i class='fas fa-clock'></i><span class='writer'>$post_date</span></li>
										<li><i class='fas fa-comments'></i><span class='writer'>$post_comment_number</span></li>
									</ul>
									<h3>$post_title</h3>
									<p>$post_text</p>
									<a href='blog-single.html'>Read More</a>
								</div>
							</div>
						</div>	
							
							
							
							";
							
						}	

					?>
					
					</div>
					<div class="row">
						<nav aria-label="Page navigation example">
								<ul class="pagination justify-content-center">
									<li class="page-item disabled">
									<a class="page-link" href="#" tabindex="-1">Previous</a>
									</li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item">
									<a class="page-link" href="#">Next</a>
									</li>
								</ul>
							</nav>

					</div>
				</main>				
				<?php include "include/siderbar.php"; ?>			
			</div>
		</div>
	</section>

	<?php include "include/footer.php"; ?>
