<?php
require_once 'header.php';

$ayar=$baglanti->prepare("SELECT * FROM ayarlar where id=?");
$ayar->execute(array(1));
$ayargetir=$ayar->fetch(PDO::FETCH_ASSOC);

 ?>
            
            <div class="contact-main-page mt-60 mb-40 mb-md-40 mb-sm-40 mb-xs-40">
                <div class="container mb-60">
                    
                    <!---harita--->
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">
                            <div class="contact-page-side-content">
                                <h3 class="contact-page-title">İletişim</h3>
                                <p class="contact-page-message mb-25"> <?php echo $ayargetir['aciklama'] ?></p>
                                <div class="single-contact-block">
                                    <h4><i class="fa fa-fax"></i> Adres</h4>
                                    <p><?php echo $ayargetir['adres'] ?></p>
                                </div>
                                <div class="single-contact-block">
                                    <h4><i class="fa fa-phone"></i> Telefon</h4>
                                    <p><?php echo $ayargetir['telefon'] ?></p>
                                  
                                </div>
                                <div class="single-contact-block last-child">
                                    <h4><i class="fa fa-envelope-o"></i> Mail</h4>
                                    <p><?php echo $ayargetir['email'] ?></p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                            <div class="contact-form-content pt-sm-55 pt-xs-55">
                                

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Main Page Area End Here -->
            <?php require_once 'footer.php' ?>