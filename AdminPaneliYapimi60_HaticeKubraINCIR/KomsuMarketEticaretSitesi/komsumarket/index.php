
<?php require_once 'header.php'; ?>
<title>Komşu Market E-Ticaret </title>
          
<?php require_once 'slider.php'; ?>
            <!-- Begin Product Area -->
            <div class="product-area pt-60 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="li-product-tab">
                                <ul class="nav li-product-menu">
                                   <li><a class="active" data-toggle="tab" href="#li-new-product"><span>Yeni Ürünler</span></a></li>
                                   <li><a data-toggle="tab" href="#li-bestseller-product"><span>Öne Çıkanlar</span></a></li>
                                   <li><a data-toggle="tab" href="#li-featured-product"><span>En İyi Fiyat</span></a></li>
                                </ul>               
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    <?php 
                                    $urunler=$baglanti->prepare("SELECT * FROM urunler order by urun_id DESC");
                                    $urunler->execute();
                                    while($urunlergetir=$urunler->fetch(PDO::FETCH_ASSOC)) {

                                        ?>



                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="urundetay-<?=seolink($urunlergetir['urun_baslik']).'-'.$urunlergetir['urun_id'] ?>">
                                                    <img style="height:auto;" src="Admin/resimler/urunler/<?php echo $urunlergetir['urun_resim'] ?>" alt="">
                                                </a>
                                                <span class="sticker">Yeni</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                      <h4><a class="product_name" href="urundetay-<?=seolink($urunlergetir['urun_baslik']).'-'.$urunlergetir['urun_id'] ?>"><?php echo $urunlergetir['urun_baslik'] ?></a></h4>
                                                        <div class="price-box" >
                                                            <span class="new-price new-price-2"><?php echo $urunlergetir['urun_fiyat'] ?>₺</span>
                                                                                                                
                                                         </div>
                                                    
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="urundetay-<?=seolink($urunlergetir['urun_baslik']).'-'.$urunlergetir['urun_id'] ?>">Detaya Git</a></li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                 <?php } ?>
                                                                     
                                                                   
                                </div>
                            </div>
                        </div>
                        <div id="li-bestseller-product" class="tab-pane" role="tabpanel">
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    <?php 
                                    $urunler=$baglanti->prepare("SELECT * FROM urunler where onecikan=:onecikan");
                                    $urunler->execute(array(
                                        'onecikan'=>1
                                    ));
                                    while($urunlergetir=$urunler->fetch(PDO::FETCH_ASSOC)) {

                                        ?>



                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                 <a href="urundetay-<?=seolink($urunlergetir['urun_baslik']).'-'.$urunlergetir['urun_id'] ?>">
                                                    <img style="height:auto;" src="Admin/resimler/urunler/<?php echo $urunlergetir['urun_resim'] ?>" alt="">
                                                </a>
                                                <span class="sticker">Yeni</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">

                                                    <h4><a class="product_name" href="urundetay-<?=seolink($urunlergetir['urun_baslik']).'-'.$urunlergetir['urun_id'] ?>"><?php echo $urunlergetir['urun_baslik'] ?></a></h4>
                                                        <div class="price-box" >
                                                            <span class="new-price new-price-2"><?php echo $urunlergetir['urun_fiyat'] ?>₺</span>
                                                                                                                
                                                         </div>

                                                   </div> 
                                                   
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="urundetay-<?=seolink($urunlergetir['urun_baslik']).'-'.$urunlergetir['urun_id'] ?>">Detaya Git</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                <?php } ?>
                                                                       
                                    
                                </div>
                            </div>
                        </div>
                        <div id="li-featured-product" class="tab-pane" role="tabpanel">
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    <?php 
                                    $urunler=$baglanti->prepare("SELECT * FROM urunler order by urun_fiyat ASC");
                                    $urunler->execute();
                                    while($urunlergetir=$urunler->fetch(PDO::FETCH_ASSOC)) { 

                                        ?>


                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="urundetay-<?=seolink($urunlergetir['urun_baslik']).'-'.$urunlergetir['urun_id'] ?>">
                                                    <img style="height:auto;" src="Admin/resimler/urunler/<?php echo $urunlergetir['urun_resim'] ?>" alt="">
                                                </a>
                                                <span class="sticker">Yeni</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">

                                                   
                                                     <h4><a class="product_name" href="urundetay-<?=seolink($urunlergetir['urun_baslik']).'-'.$urunlergetir['urun_id'] ?>"><?php echo $urunlergetir['urun_baslik'] ?></a></h4>
                                                        <div class="price-box" >
                                                            <span class="new-price new-price-2"><?php echo $urunlergetir['urun_fiyat'] ?>₺</span>
                                                                                                                
                                                         </div>

                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="urundetay-<?=seolink($urunlergetir['urun_baslik']).'-'.$urunlergetir['urun_id'] ?>">Detaya Git</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                <?php } ?>

                              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Area End Here -->
            <!-- Begin Li's Static Banner Area -->
            
            
            
           <?php  require_once 'footer.php'?>