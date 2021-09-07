<footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="<?=SITE?>">
                                    <img src="<?=SITE?>img/footer_logo.png" alt="">
                                </a>
                            </div>
                            
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Hızlı Menü
                            </h3>
                            <ul>
                                <li><a href="<?=SITE?>">Anasayfa </a></li>
                                <?php
                                                    $kurumsal=$VT->VeriGetir("kurumsal","WHERE durum=?",array(1),"ORDER BY sirano ASC",1);
                                                    if($kurumsal!=false)
                                                    {
                                                        for($i=0;$i<count($kurumsal);$i++)
                                                        {
                                                            ?>
                                                            <li><a href="<?=SITE?>kurumsal/<?=$kurumsal[$i]["seflink"]?>"><?=stripslashes($kurumsal[$i]["baslik"])?></a></li>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                
                                <li><a href="<?=SITE?>hizmetler">Hizmetler</a></li>
                                <li><a href="<?=SITE?>projeler">Projeler</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            
                            <ul>
                                <li><a href="<?=SITE?>blog">Blog</a></li>
                                <li><a href="<?=SITE?>iletisim">İletişim</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Subscribe
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit">Subscribe</button>
                            </form>
                            <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems
                                luckily.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<?=date("Y")?> Tüm Hakları Saklıdır. <i class="fa fa-heart-o" aria-hidden="true"></i> Tasarım <a href="#" target="_blank">Emirhan Demir</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>