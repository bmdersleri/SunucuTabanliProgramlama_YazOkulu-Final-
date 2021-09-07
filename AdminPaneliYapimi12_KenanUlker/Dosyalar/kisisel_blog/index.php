<?php include 'header.php'; ?>


<section class="section pt-85">
    <div class="container-fluid">
        <div class="row">



            <?php
            //Son blogları çekme işlemi
            $blogCek=$conn->prepare("SELECT * FROM blog ORDER BY tarih DESC");
            $blogCek->execute();
            while ($row=$blogCek->fetch(PDO::FETCH_ASSOC)) { ?>

                <div class="col-lg-4 col-md-6">
                    <div class="post-card">
                        <div class="post-card-image">
                            <a href="<?=seo('blog-'.$row["baslik"]).'-'.$row["id"]?>">
                                <img src="<?php echo $row['resim']; ?>" alt="">
                            </a>
                        </div>
                        <div class="post-card-content">

                            <h5>
                                <a href="<?=seo('blog-'.$row["baslik"]).'-'.$row["id"]?>"><?php echo $row['baslik']; ?></a>
                            </h5>
                            <p><?php echo mb_substr($row['text'], 0,100); ?>
                            </p>
                            <div class="post-card-info">
                                <ul class="list-inline">
                                    <li>
                                        <a href="hakkimda">
                                            <img src="<?php echo $yazarData['yazar_img']; ?>" alt="">
                                        </a>
                                    </li>

                                    <li class="dot"></li>
                                    <li><?php echo $row['tarih']; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/-->
                </div>


            <?php } ?>











        </div>
    </div>
</section>
<!--/-->




<?php include 'footer.php'; ?>
