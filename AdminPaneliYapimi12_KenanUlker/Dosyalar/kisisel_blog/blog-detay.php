<?php

  include 'header.php';

//Blog verileri gelen idye göre dbden çekme işlemi yapılır.
if (isset($_GET['blog_id'])) {
    $blog_id = $_GET['blog_id'];

		$blogSor=$conn->prepare("SELECT * FROM blog WHERE id = :blog_id");
		$blogSor->execute(array(
			'blog_id' => $blog_id
		));

		$say=$blogSor->rowCount();
    if ($say>0) {
      $blogData = $conn->query("SELECT * FROM blog WHERE id = '$blog_id' ")->fetch(PDO::FETCH_ASSOC);
    }
    else {
        header("location:index.php");
    }



}else {
    header("location:index.php");
}
?>




<section class="section pt-55">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 max-width">
                    <!--widget-author-->
                    <div class="widget">
                        <div class="widget-author">
                            <a href="hakkimda" class="image">
                                <img src="<?php echo $yazarData['yazar_img']; ?>">
                            </a>
                            <h6>
                                <span>Merhaba, <?php echo $yazarData['yazar_adi']; ?></span>
                            </h6>
                            <p>
                            <?php echo $yazarData['yazar_hakkinda']; ?></p>



                        </div>
                    </div>
                    <!--/-->

                    <!--widget-latest-posts-->
                    <div class="widget ">
                        <div class="section-title">
                            <h5>Son Yazılar</h5>
                        </div>
                        <ul class="widget-latest-posts">





                            <?php
                            $blogCek=$conn->prepare("SELECT * FROM blog ORDER BY tarih DESC");
                            $blogCek->execute();
                            while ($row=$blogCek->fetch(PDO::FETCH_ASSOC)) { ?>


                                <li class="last-post">
                                    <div class="image">
                                        <a href="<?=seo('blog-'.$row["baslik"]).'-'.$row["id"]?>">
                                            <img src="<?php echo $row['resim']; ?>">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <p>
                                            <a href="<?=seo('blog-'.$row["baslik"]).'-'.$row["id"]?>"><?php echo $row['baslik']; ?></a>
                                        </p>
                                        <small>
                                            <span class="icon_clock_alt"></span><?php echo $row['tarih']; ?></small>
                                        </div>
                                    </li>

                                <?php } ?>





                        </ul>
                    </div>
                    <!--/-->



                    <!--widget-instagram-->
                    <div class="widget">
                        <div class="section-title">
                            <h5>Galeri</h5>
                        </div>
                        <ul class="widget-instagram">


                            <?php
                            $galeriCek=$conn->prepare("SELECT * FROM galeri ORDER BY id DESC LIMIT 6");
                            $galeriCek->execute();
                            while ($rowGaleri=$galeriCek->fetch(PDO::FETCH_ASSOC)) { ?>


                            <li>
                                <a class="image" href="#">
                                    <img src="<?php echo $rowGaleri['img']; ?>" alt="">
                                </a>
                            </li>


                        <?php } ?>

                        </ul>

                    </div>
                    <!--/-->


                </div>
                <div class="col-lg-8 mb-20">
                    <!--Post-single-->
                    <div class="post-single">
                        <div class="post-single-image">
                            <img src="<?php echo $blogData['resim']; ?>">
                        </div>
                        <div class="post-single-content">

                            <h4><?php echo $blogData['baslik']; ?> </h4>
                            <div class="post-single-info">
                                <ul class="list-inline">
                                    <li><?php echo $blogData['tarih']; ?></li>

                                </ul>
                            </div>
                        </div>

                        <div class="post-single-body">
                            <p>
                                <?php echo $blogData['text']; ?>
                            </p>
                        </div>


                    </div> 

                </div>
            </div>
        </div>
    </section>
<!--/-->




<?php include 'footer.php'; ?>
