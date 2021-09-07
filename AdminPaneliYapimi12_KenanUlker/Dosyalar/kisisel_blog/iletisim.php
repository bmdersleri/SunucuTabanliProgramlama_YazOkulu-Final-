<?php include 'header.php';

//Eğer post işlemi yapılmış ise dbye iletişim formu mesajı eklenir
if (isset($_POST['mesajGonder'])) {

    $mesajGonder = $conn->prepare("INSERT INTO mesajlar SET
        ad = :ad,
        email = :email,
        konu = :konu,
        mesaj = :mesaj");

    $insert = $mesajGonder->execute(array(
        "ad" => $_POST['ad'],
        "email" => $_POST['email'],
        "konu" => $_POST['konu'],
        "mesaj" => $_POST['mesaj']
    ));

} ?>




<section class="section pt-50">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h5>İletişim</h5>
                </div>
            </div>
        </div>

        <div class="row mb-20">

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
                            //Son blogları çekme
                            $blogCek=$conn->prepare("SELECT * FROM blog ORDER BY tarih DESC LIMIT 6");
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



                        <!--widget--->
                        <div class="widget">
                            <div class="section-title">
                                <h5>Galeri</h5>
                            </div>
                            <ul class="widget-instagram">


                                <?php
                                //Son galeriyi çekme
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



                    <div class="col-lg-8 mt-30">
                        <div class="contact">
                            <div class="google-map">
                                <?php echo $siteData['google_maps']; ?>
                            </div>
                            <form action="iletisim" class="widget-form contact_form " method="POST" id="main_contact_form">
                                <h6>Bana Ulaş.</h6>

                                <?php
                                // Eğer insert işlemi başarılı ise alert verilir.
                                if (@$insert) {?>
                                    <div class="alert alert-success contact_msg" role="alert">
                                        Mesajınız Başarıyla Alındı
                                    </div>
                                <?php }?>


                                <div class="form-group">
                                    <input type="text" name="ad" id="ad" class="form-control" placeholder="Adınız*" required="required">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email*" required="required">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="konu" id="konu" class="form-control" placeholder="Konu*" required="required">
                                </div>

                                <div class="form-group">
                                    <textarea name="mesaj" id="mesaj" cols="30" rows="5" class="form-control" placeholder="Mesajınız*" required="required"></textarea>
                                </div>

                                <button type="submit" name="mesajGonder" class="btn-custom">Mesaj Gönder</button>
                            </form>
                        </div>
                    </div>



                </div>

            </div>
        </section>






        <?php include 'footer.php'; ?>
