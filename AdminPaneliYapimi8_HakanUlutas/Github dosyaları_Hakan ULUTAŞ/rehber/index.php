<?php include 'header.php'; ?>




<section class="main-content">
		<div class="container-xl">

			<div class="row gy-4">

				<div class="col-lg-12">

                    <div class="row gy-4">



            <?php 
            //Son blogları çekme işlemi
            $blogCek=$conn->prepare("SELECT * FROM blog ORDER BY tarih DESC");
            $blogCek->execute();
            while ($row=$blogCek->fetch(PDO::FETCH_ASSOC)) { ?>


                        <div class="col-sm-3">
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <span class="post-format">
                                        <i class="icon-picture"></i>
                                    </span>
                                    <a href="<?=seo('blog-'.$row["baslik"]).'-'.$row["id"]?>">
                                        <div class="inner">
                                            <img src="<?php echo $row['resim']; ?>">
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                       
                                        <li class="list-inline-item"><?php echo $row['tarih']; ?></li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="<?=seo('blog-'.$row["baslik"]).'-'.$row["id"]?>"><?php echo $row['baslik']; ?></a></h5>
                                   
                                </div>
                                


                            </div>
                        </div>



                    <?php } ?>




                    </div>

					
					

				</div>
				



			</div>

		</div>
	</section>






<?php include 'footer.php'; ?>