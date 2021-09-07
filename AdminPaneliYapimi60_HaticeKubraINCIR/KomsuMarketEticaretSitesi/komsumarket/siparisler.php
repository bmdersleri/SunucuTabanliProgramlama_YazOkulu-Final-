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
                                                <th>Sipariş Numarası</th>
                                                <th class="li-product-thumbnail">Resim</th> 
                                                <th class="li-product-thumbnail">Baslık</th> 
                                                <th class="li-product-price">Ücret</th>
                                                <th class="li-product-quantity">Adet</th>
                                                <th class="li-product-quantity">Zaman</th>

                                                <th></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                       <?php 
                                         #her kullanıcı için kendi id degerindeki sipariş getirilir
                                         $siparis=$baglanti->prepare("SELECT * FROM siparisler where kullanici_id=:kullanici_id ");
                                         $siparis->execute(array(
                                                  'kullanici_id'=>$kullanicigetir['kullanici_id']
                                                      ));

                                         while($siparisgetir=$siparis->fetch(PDO::FETCH_ASSOC)) {  
                                         $alinanid= $siparisgetir['urun_id'];

                                         #urun-id degerine gör ürünler getirilir
                                         $urunler=$baglanti->prepare("SELECT * FROM urunler where urun_id=:urun_id"); 
                                         $urunler->execute(array(
                                            'urun_id'=>$alinanid                                
                                             )); 
                                         $urunlergetir=$urunler->fetch(PDO::FETCH_ASSOC);                     
                                                                                         
                                                
                                        ?>

                                          
                                            <tr>
                                            <?php ?> 
                                               

                                                <td><?php echo $siparisgetir['siparis_id'] ?></td>
                                                <td class="li-product-thumbnail"><a href="#"><img style="width: 100px;" src="Admin/resimler/urunler/<?php echo $urunlergetir['urun_resim'] ?>" alt="Li's Product Image"></a></td>
                                                 
                                                <td class="li-product-name"><a href="#" style="color:block"><?php echo $urunlergetir['urun_baslik'] ?></a></td>
                                                
                                                <td class="li-product-price"><span class="amount"><?php echo $siparisgetir['urun_fiyat'] ?>₺</span></td>
                                                

                                                <td class="quantity">
                                                    <label>Adet</label>
                                                    <div class="cart-plus-minus">
                                                      
                                                        <input value="<?php echo $siparisgetir['urun_adet'] ?>" class="cart-plus-minus-box" value="1" type="text">
                                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                    </div>
                                                </td><!---ücretle adeti çarpma-->
                                               
                                                <td class="product-subtotal"><span class="amount"><?php echo $siparisgetir['siparis_zaman'] ?></span></td>                                               
                                               <td>
                                                <button style="background-color:#ccefcd; border-color:#ccefcd;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Siparişi Güncelle
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Siparişinizi güncellemek mi istiyorsunuz?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Siparişin üzerinden 24 saat geçmedi ise sipariş güncellenebilir.</br>
       24 saat geçti ise güncelleme işlemi yapılamaz.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
   <a href="siparisguncelle"><button type="button" style="background-color:#ccefcd; border-color:#ccefcd;" class="btn btn-primary">Sipariş Güncelle</button></a>
      </div>
    </div>
  </div>
</div>
                                                   


                                               </td>
                                            </tr>
                       <?php } ?>              

                                            
                                        </tbody>
                                    </table>
                                </div>
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Shopping Cart Area End-->
            <?php require_once 'footer.php' ?>