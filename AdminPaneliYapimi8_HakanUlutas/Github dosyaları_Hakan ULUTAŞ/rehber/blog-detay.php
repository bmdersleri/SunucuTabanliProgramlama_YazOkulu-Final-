<?php include 'header.php';
$blog_id = $_GET['blog_id'];
$blogBilgi = $conn->query("SELECT * FROM blog WHERE id= '$blog_id' ")->fetch(PDO::FETCH_ASSOC); ?>




<section id="hero">

	<div class="container-xl">

		<div class="row gy-4">

			<div class="col-md-12">
				<div class="spacer" data-height="50"></div>

				<div class="section-header">
					<h3 class="section-title"><?php echo $blogBilgi['baslik']; ?></h3>
					<img src="images/wave.svg" class="wave" alt="wave" />
				</div>
				
				
			</div>
			

			

			<div class="row gy-4">

				<div class="col-lg-12">

                    <div class="page-content bordered rounded padding-30 text-center">

                        <img src="<?php echo $blogBilgi['resim']; ?>"  class="rounded mb-4" />

                        <h2><?php echo $blogBilgi['baslik']; ?></h2>
                        <p><?php echo $blogBilgi['text']; ?></p>

                        <hr class="my-4" />
                        
                        
                    </div>

                </div>
				

			</div>



			




		</div>

	</div>

	<?php include 'footer.php'; ?>