<?php require_once 'header.php'; 


#toplam urun sayısını bulmak için 
$sayibul=$baglanti->prepare("SELECT * FROM  urunler where kategori_id=:kategori_id and urun_durum=:urun_durum");
$sayibul->execute(array(
  'kategori_id'=>$_GET['kategori_id'],
  'urun_durum'=>1

));

$urunsayisi=$sayibul->rowCount();

$adet=6; #kaç tane ürün gösterilmesi için
$sayfa=$_GET['sayfa']; #sayfa degerini almak için 
$sayfa1=($sayfa*$adet)-$adet;  //1*8-8=0 0'dan sonrası,  2*8-8=8 8'den sonrası gösterim 
$sayfasayisi=ceil($urunsayisi/$adet);


 // gelen kategori_id (katid) ve urun durum degerine göre urunler getirilir
$urunler=$baglanti->prepare("SELECT * FROM urunler where kategori_id=:kategori_id and urun_durum=:urun_durum order by urun_sira ASC limit $sayfa1, $adet"); //sıralı gösterilir
$urunler->execute(array(
    'kategori_id'=>$_GET['kategori_id'], 
    'urun_durum'=>1 #aktifse ürün 
   ));



?>
            <div class="content-wraper pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="shop-top-bar mt-30">
                                <div class="shop-bar-inner">
                                   
                                    <div class="toolbar-amount">
                                        <span>Gösterilen 1 to 6 </span>
                                    </div>
                                </div>
                                <!-- product-select-box start -->
                                <div class="product-select-box">
                                    <div class="product-short">
                                        <p>Sırala:</p>
                                        <select class="nice-select">
                                            <option value="trending">İsime göre (A - Z)</option>
                                            <option value="sales">İsime göre  (Z - A)</option>
                                            <option value="rating">Düşük Fiyat </option>
                                            <option value="date">Yüksek Fiyat</option>
                                           
                                        </select>
                                    </div>
                                </div>
                                <!-- product-select-box end -->
                            </div>
                            <!-- shop-top-bar end -->
                            <!-- shop-products-wrapper start -->
                            <div class="shop-products-wrapper">
                                <div class="tab-content">
                                    <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                        <div class="product-area shop-product-area">
                                            <div class="row">
                                    <?php  
                                   
                                     while ($urunlergetir=$urunler->fetch(PDO::FETCH_ASSOC)) { 
                                     $urunsayisi=$urunler->rowCount();  ?>
                                                
                                                <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product-wrap">
                                                        <div class="product-image">
                                                            <a href="urundetay-<?=seolink($urunlergetir['urun_baslik']).'-'.$urunlergetir['urun_id'] ?>">
                                                                <!-- urun resimleri veritabanından getirilir --->
                                                                <img src="Admin/resimler/urunler/<?php echo $urunlergetir['urun_resim'] ?>" alt="Li's Product Image">
                                                            </a>
                                                            
                                                        </div>
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                               
                                                                <h4><a class="product_name" href="urundetay-<?=seolink($urunlergetir['urun_baslik']).'-'.$urunlergetir['urun_id'] ?>"><?php echo $urunlergetir['urun_baslik'] ?></a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price"><?php echo $urunlergetir['urun_fiyat'] ?>₺</span>
                                                                </div>
                                                            </div>
                                                            <div class="add-actions">
                                                                <ul class="add-actions-link">
                                                                    <li class="add-cart active"><a href="urundetay-<?=seolink($urunlergetir['urun_baslik']).'-'.$urunlergetir['urun_id'] ?>">Detaylı İncele</a></li>
                                                                    
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                                     <?php } ?>                                                  
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="paginatoin-area">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <p>Gösterilen 1-6</p>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <ul class="pagination-box">

                                                    <li><a href="?sayfa=<?php echo $sayfa-1; ?>" class="Previous"><i class="fa fa-chevron-left"></i> Geri</a>
                                                    </li>
                                                     <?php $i=1; while ($i<=$sayfasayisi) {  ?>
                                                        <li class="<?php if($i==$sayfa){echo "active";} ?>"><a style="color:black"; href="?sayfa=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                                     <?php $i++; }  ?>
                                                
                                                    <li>
                                                      <a href="?sayfa=<?php echo $sayfa+1; ?>" class="Next"> İleri <i class="fa fa-chevron-right"></i></a>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- shop-products-wrapper end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Wraper Area End Here -->
           <?php require_once 'footer.php' ?>