<?php
$sayfa="Portfolyo";
include("inc/vt.php");

$sorgu = $baglanti->prepare("select * from portfolyo"); //sorguyu oluşturduk.
$sorgu->execute();//sorguyu calıştırdık.
$sonuc = $sorgu->fetch();//sonuçları aldırdık.//tablolardaki verileri sonuc değişkenine aldık.
include("inc/head.php");
$tanimlama = $sonuc["tanimlama"];//değişkenimi oluşturdum
$tanimlama = $sonuc["anahtar"];
include("inc/head.php");

?>

    <!-- Portfolio Grid-->
    <section class="page-section bg-light " id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase mt-3"><?php echo $sonuc['baslık'] ?></h2>
                <h3 class="section-subheading text-muted"><?php echo $sonuc['altBaslık'] ?>.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img  class="img-fluid" src="assets/img/portfolio/hqdefault.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">ACER</div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img  class="img-fluid" src="assets/img/portfolio/lenovo-thinkpad-e14-i5-10210u-16gb-ddr4-intel-uhd-512gb-ssd-14-fhd-dos-notebook-5.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">LENOVO</div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img   class="img-fluid" src="assets/img/portfolio/10471132659762.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">HP</div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/En-İyi-7-Asus-Zenbook-Laptoplar.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">ASUS</div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img  class="img-fluid" src="assets/img/portfolio/5b9a071a0f254326ccc4f180.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">İPHONE</div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/indir1.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">DELL</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Portfolio Modals-->
    <!-- Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">ÖZELLİKLER</h2>

                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/hqdefault.jpg" alt="" />
                                <p>İşlemci: Pentium N5000 Ekran kartı: Intel UHD Graphics 605 Sabit disk kapasitesi: 128 GB Ekran Boyutu: 35.6 cm / 14 inç Çözünürlük: 1920 x 1080 Led Arka Işıklandırma: Evet</p>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Sayfayı Kapat
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 2-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">ÖZELLİKLER</h2>

                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/lenovo-thinkpad-e14-i5-10210u-16gb-ddr4-intel-uhd-512gb-ssd-14-fhd-dos-notebook-5.jpg" alt="" />
                                <p> MediaMarkt’ta her kullanım ihtiyacına ve bütçeye uyum sağlayan onlarca Lenovo notebook bulunuyor. Elektronik alışverişinin vazgeçilmez markası Lenovo tarafından üretilen notebook modelleri, harika fiyat performans oranları ile öne çıkıyor. Lenovo’nun 14 inç, 15.6 inç ve 17.3 inç boyutlarında ekran seçenekleri bulunuyor. Ekran boyutu, işlemci hızı ve görüntü kalitesi gibi unsurlar, Lenovo notebook fiyatlarını değiştiren etkenler arasında bulunuyor.</p>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Sayfayı Kapat
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">ÖZELLİKLER</h2>

                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/10471132659762.jpgg" alt="" />
                                <p> HP 1U5R9EA/ Pavilion 15.6"/ Core i7-10750H/ 16GB/ 512GB/ GTX 1660 Ti-6GB/ Full-HD Win 10 Home Laptop Siyah
                                    Ürün Numarası: 1212769
                                    İşlemci: Intel Core i7-10750H, Intel Turbo Boost Ekran kartı: Nvidia GeForce GTX 1660 Ti (6 GB GDDR6 ayrılmış) Sabit disk kapasitesi: 512 GB Ekran Boyutu: - / 15.6 inç Çözünürlük: 1920 x 1080 Görüntü kalitesi: Full-HD</p>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Sayfayı Kapat
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 4-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">ÖZELLİKLER</h2>

                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/En-İyi-7-Asus-Zenbook-Laptoplar.jpg" alt="" />
                                <p>ASUS
                                    ASUS Rog G512LWS-AZ043T 15.6" i7-10750H/16/512/RTX2070 Süper 8GB/Win10 Gaming Laptop Siyah Outlet 1211259
                                    Ürün Numarası: 3011176
                                    İşlemci: Intel Core i7-10750H Ekran kartı: NVIDIA GeForce RTX 2070 Super Sabit disk kapasitesi: 512 GB Ekran Boyutu: - / 15.6 inç Çözünürlük: 1920 x 1080 Görüntü kalitesi: Full-HD+</p>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Sayfayı Kapat
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 5-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">ÖZELLİKLER</h2>

                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5b9a071a0f254326ccc4f180.jpg" alt="" />
                                <p>pİşlemci: M1 Ekran kartı: 8 çekirdekli Ekran Boyutu: - / 13.3 inç Çözünürlük: inç başına 227 piksel yoğunlukta 2560 x 1600 özgün Görüntü kalitesi: Full-HD Ekran Boyutu (inç): 13.3 inç</p>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Sayfayı Kapat
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 6-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">ÖZELLİKLER</h2>

                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/indir1.jpg" alt="" />
                                <p>Ülkemizde çok fazla kullanılmasa da Dell markası dünyada oldukça fazla kullanılan bir markadır. Hatta Lenovo ve HP markalarının arkasından dünyanın en büyük üçüncü kişisel bilgisayar üreticisidir.

                                    Günde yaklaşık olarak 120 bin sistem satmaktadır yani saniyede birden fazla sistem satıyorlar. Bu istatistik bile Dell markasının ne kadar kaliteli bilgisayarlar ürettiğini kanıtlıyor. Şirketler tarafından da oldukça fazla tercih edilen bir marka. Fortune dergisinde ilk 500 içerisinde yer alan şirketlerin %98’i Dell bilgisayarları tercih etmektedir.</p>

                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Sayfayı Kapat
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    </body>
    </html>
<?php
include("inc/footer.php");
?>