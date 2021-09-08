<?php

require_once 'header.php';

 ?>
                       
          
            <div class="Shopping-cart-area pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <?php
                            if(@$_GET['durum']=="eklendi"){ ?>
                               <b style="color:green"> ürün sepete eklendi</b>

                           <?php }   ?>


                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="li-product-remove"></th>
                                                <th class="li-product-thumbnail">Resim</th>
                                                <th class="cart-product-name">Başlık</th>
                                                <th class="li-product-price">Ücret</th>
                                                <th class="li-product-quantity">Adet</th>
                                                <th class="li-product-subtotal">Toplam Fiyat</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                       <?php #islem.phpdeki cookie adı,  $id degeri-> $key, $value -> $adet olarak alınır
                                            foreach (@$_COOKIE['sepet'] as $key => $value) { #sepetteki ürünler getirilir
                                                $urunler=$baglanti->prepare("SELECT * FROM urunler where urun_id=:urun_id  order by urun_sira ASC");
                                                $urunler->execute(array(
                                                  'urun_id'=>$key  #urunid $key'den gelen id degerine eşitlenir
                                                      ));

                                                $urunlergetir=$urunler->fetch(PDO::FETCH_ASSOC);
                                                
                                                
                                        ?>

                                           <!---Sepetteki ürünlerin listelenmesi--->
                                            <tr> <!---işlem.php -> id ($key) ile setepsil işlemi -->
                                                <td class="li-product-remove"><a href="islem?sepetsil&id=<?php echo $key ?>"><i class="fa fa-times"></i></a></td>


                                                <td class="li-product-thumbnail"><a href="#"><img style="width: 100px;" src="Admin/resimler/urunler/<?php echo $urunlergetir['urun_resim'] ?>" alt="Li's Product Image"></a></td>
                                                <td class="li-product-name"><a href="#" style="color:block"><?php echo $urunlergetir['urun_baslik'] ?></a></td>
                                                <td class="li-product-price"><span class="amount"><?php echo $urunlergetir['urun_fiyat'] ?>₺</span></td>
                                                <td class="quantity">
                                                    <label>Adet</label>
                                                    <div class="cart-plus-minus">
                                                        <!---kullanıcının sepete, üründen kaç adet eklediğini göstermek için--->
                                                        <input value="<?php echo $value ?>" class="cart-plus-minus-box" value="1" type="text">
                                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                    </div>
                                                </td><!---ücretle adeti çarpma-->
                                                <td class="product-subtotal"><span class="amount"><?php echo $value*$urunlergetir['urun_fiyat'] ?>₺</span></td>
                                            </tr>



 <?php 
 #ürünlerin toplam fiyat hesaplaması
 $kdv=$sepettop*18/100; #kdv hesaplaması
 $geneltoplam=$sepettop+$kdv;


?>

                                        <?php } ?>

                                            
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Toplam Fİyat</h2>
                                            <ul>
                                                <li>Toplam Fiyat <span><?php echo $sepettop ?>₺</span></li>
                                                <li>KDV <span><?php echo $kdv ?>₺</span></li>
                                                <li>Genel Toplam <span><?php echo $geneltoplam?>₺</span></li>  <!---genel toplam hesaplama--->
                                            </ul>
                                            <!----Genel toplam  deegri gönderilir--->
                                            <a href="alisveris?toplamfiyat=<?php echo $geneltoplam ?>">Alışverişi Bitir</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Shopping Cart Area End-->
            <?php require_once 'footer.php' ?>