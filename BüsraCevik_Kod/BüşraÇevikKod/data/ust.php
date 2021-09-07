<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid ">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="<?=SITE?>">
                                    <img src="<?=SITE?>img/acme-logo.png"  height="100px;" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="<?=SITE?>">ANASAYFA</a></li>
                                        <li><a href="#">KURUMSAL <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <?php
                                                $kurumsal=$VT->VeriGetir("kurumsal","WHERE durum=?",array(1),"ORDER BY sirano ASC");
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


                                            </ul>


                                                <li><a href="<?=SITE?>hizmetler">HİZMETLER</a></li>
                                                <li><a href="<?=SITE?>projeler">PROJELER</a></li>
                                                <li><a href="<?=SITE?>ürünler">ÜRÜNLER</a></li>
                                                <li><a href="<?=SITE?>iletisim">İLETİŞİM</a></li>


                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a href="<?=SITE?>iletisim">Bize Ulaşın</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

