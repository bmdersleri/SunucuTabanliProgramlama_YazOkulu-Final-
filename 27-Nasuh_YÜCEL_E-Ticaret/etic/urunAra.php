<?php /** @noinspection ALL */
require_once "data/select.php";

$title = "Binlerce ürün arasından istediğini ara";

?>

<?php if (isset($_GET['s'])) { if (!is_numeric($_GET['s'])) { ?><meta http-equiv="refresh" content="0; url=index.php">  <?php } } ?>
<?php if (isset($_GET['kid'])) { if (!is_numeric($_GET['kid'])) { ?><meta http-equiv="refresh" content="0; url=index.php">  <?php } } ?>
<?php if (isset($_GET['a'])) {if (!is_numeric($_GET['a'])) { ?> <meta http-equiv="refresh" content="0; url=index.php">  <?php } } ?>

<?php if (isset($_GET['a'])) {if (!is_numeric($_GET['a'])) { ?> <meta http-equiv="refresh" content="0; url=index.php">  <?php } } ?>
<body style="">
<!-- Wrapper Start -->
<div class="wrapper standart">
    <!-- Header Başlangıç-->
    <?php require_once "header.php"; ?>
    <!-- Header Bitiş-->
<?php



?>
    <div class="container mt20">
        <div class="row standart">
            <!-- Sol Menü Başlangıç -->
            <div class="col-2 ">
                <div class="card solMenu">
                    <div class="card-body ">
                        <h6>Fiyat Aralığı</h6>
                        <ul class="nav flex-column">
                            <li class="nav-item standart">
                                <a class="nav-link">
                                    <div class="form-check">
                                        <input <?php if (isset($_GET['a'])) {
                                            if ($_GET['a'] == 1) {
                                                echo 'checked';
                                            }
                                        } ?> class="form-check-input" type="checkbox" value="" id="1">
                                        <label class="form-check-label fiyatAraligi" for="1">
                                            0 - 100 ₺
                                        </label>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item mt-10">
                                <a class="nav-link active">
                                    <div class="form-check">
                                        <input <?php if (isset($_GET['a'])) {
                                            if ($_GET['a'] == 2) {
                                                echo 'checked';
                                            }
                                        } ?> class="form-check-input" type="checkbox" value="" id="2">
                                        <label class="form-check-label fiyatAraligi" for="2">
                                            100 - 250 ₺
                                        </label>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item mt-10">
                                <a class="nav-link active">
                                    <div class="form-check">
                                        <input <?php if (isset($_GET['a'])) {
                                            if ($_GET['a'] == 3) {
                                                echo 'checked';
                                            }
                                        } ?> class="form-check-input" type="checkbox" value="" id="3">
                                        <label class="form-check-label fiyatAraligi" for="3">
                                            250 - 500 ₺
                                        </label>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item mt-10">
                                <a class="nav-link active">
                                    <div class="form-check">
                                        <input <?php if (isset($_GET['a'])) {
                                            if ($_GET['a'] == 4) {
                                                echo 'checked';
                                            }
                                        } ?> class="form-check-input" type="checkbox" value="" id="4">
                                        <label class="form-check-label fiyatAraligi" for="4">
                                            500 - 1000 ₺
                                        </label>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item mt-10">
                                <a class="nav-link active">
                                    <div class="form-check">
                                        <input <?php if (isset($_GET['a'])) {
                                            if ($_GET['a'] == 5) {
                                                echo 'checked';
                                            }
                                        } ?> class="form-check-input" type="checkbox" value="" id="5">
                                        <label class="form-check-label fiyatAraligi" for="5">
                                            1000 - 2500 ₺
                                        </label>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item mt-10">
                                <a class="nav-link active">
                                    <div class="form-check">
                                        <input <?php if (isset($_GET['a'])) {
                                            if ($_GET['a'] == 6) {
                                                echo 'checked';
                                            }
                                        } ?> class="form-check-input" type="checkbox" value="" id="6">
                                        <label class="form-check-label fiyatAraligi" for="6">
                                            2500 - 5000 ₺
                                        </label>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item mt-10">
                                <a class="nav-link active">
                                    <div class="form-check">
                                        <input <?php if (isset($_GET['a'])) {
                                            if ($_GET['a'] == 7) {
                                                echo 'checked';
                                            }
                                        } ?> class="form-check-input" type="checkbox" value="" id="7">
                                        <label class="form-check-label fiyatAraligi" for="7">
                                            5000 - 10000 ₺
                                        </label>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item mt-10">
                                <a class="nav-link active">
                                    <div class="form-check">
                                        <input <?php if (isset($_GET['a'])) {
                                            if ($_GET['a'] == 8) {
                                                echo 'checked';
                                            }
                                        } ?> class="form-check-input" type="checkbox" value="" id="8">
                                        <label class="form-check-label fiyatAraligi" for="8">
                                            10000 ₺ Üzeri
                                        </label>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Sol Menü Bitiş -->

            <!-- Ürün Listesi Başlangıç -->

            <div class="col-10">
                <div class="row justify-content-center">

                    <?php



                    $getir = 0;
                    if (isset($_GET["s"])) {
                        if ($_GET["s"] == "1") {
                            $getir = "0";
                        } else {
                            $getir = $_GET["s"] * 12 - 12;
                        }
                    }

                    //$aranacak = urunCekWithAramaMenu($db_connection,$_GET['urun']);
                    if(isset($aranacak[0][2]))
                    {
                        $urunler = urunCekWithAranacak($db_connection, $aranacak[0][2],  $getir);
                        $sayfaSayisi = ceil(count(urunCekWithAranacakTotal($db_connection, $aranacak[0][2]))) / 12;
                    }
                    else {


                        $sayfaSayisi = 1;

                        if (isset($_GET["kid"])) {
                            if (isset($_GET["a"])) {
                                if ($_GET["a"] == 1) {
                                    $urunler = urunCekFiyat($db_connection, $_GET["kid"], $getir, 0, 100);
                                    $sayfaSayisi = ceil(count(totalUrunCekWithFiyat($db_connection, $_GET["kid"], 0, 100))) / 12;
                                }
                                if ($_GET["a"] == 2) {
                                    $urunler = urunCekFiyat($db_connection, $_GET["kid"], $getir, 100, 250);
                                    $sayfaSayisi = ceil(count(totalUrunCekWithFiyat($db_connection, $_GET["kid"], 100, 250))) / 12;
                                }
                                if ($_GET["a"] == 3) {
                                    $urunler = urunCekFiyat($db_connection, $_GET["kid"], $getir, 250, 500);
                                    $sayfaSayisi = ceil(count(totalUrunCekWithFiyat($db_connection, $_GET["kid"], 250, 500))) / 12;
                                }
                                if ($_GET["a"] == 4) {
                                    $urunler = urunCekFiyat($db_connection, $_GET["kid"], $getir, 500, 1000);
                                    $sayfaSayisi = ceil(count(totalUrunCekWithFiyat($db_connection, $_GET["kid"], 500, 1000))) / 12;
                                }
                                if ($_GET["a"] == 5) {
                                    $urunler = urunCekFiyat($db_connection, $_GET["kid"], $getir, 1000, 2500);
                                    $sayfaSayisi = ceil(count(totalUrunCekWithFiyat($db_connection, $_GET["kid"], 1000, 2500))) / 12;
                                }
                                if ($_GET["a"] == 6) {
                                    $urunler = urunCekFiyat($db_connection, $_GET["kid"], $getir, 2500, 5000);
                                    $sayfaSayisi = ceil(count(totalUrunCekWithFiyat($db_connection, $_GET["kid"], 2500, 5000))) / 12;
                                }
                                if ($_GET["a"] == 7) {
                                    $urunler = urunCekFiyat($db_connection, $_GET["kid"], $getir, 5000, 10000);
                                    $sayfaSayisi = ceil(count(totalUrunCekWithFiyat($db_connection, $_GET["kid"], 5000, 10000))) / 12;
                                }
                                if ($_GET["a"] == 8) {
                                    $urunler = urunCekFiyat($db_connection, $_GET["kid"], $getir, 10000, 9999999999);
                                    $sayfaSayisi = ceil(count(totalUrunCekWithFiyat($db_connection, $_GET["kid"], 10000, 9999999999))) / 12;
                                }
                            } else {


                                $urunler = urunCek($db_connection, $_GET["kid"], $getir);
                                $totalUrun = totalUrunCek($db_connection, $_GET["kid"]);
                                $sayfaSayisi = ceil(count($totalUrun) / 12);
                            }
                        } else if (isset($_GET["urun"])) {

                            if (isset($_GET["a"])) {
                                if ($_GET["a"] == 1) {
                                    $urunler = urunCekWithAdFiyat($db_connection, $_GET["urun"], $getir, 0, 100);
                                    $sayfaSayisi = ceil(count(totalUrunCekWithAdFiyat($db_connection, $_GET["urun"], 0, 100))) / 12;
                                }
                                if ($_GET["a"] == 2) {
                                    $urunler = urunCekWithAdFiyat($db_connection, $_GET["urun"], $getir, 100, 250);
                                    $sayfaSayisi = ceil(count(totalUrunCekWithAdFiyat($db_connection, $_GET["urun"], 100, 250))) / 12;
                                }
                                if ($_GET["a"] == 3) {
                                    $urunler = urunCekWithAdFiyat($db_connection, $_GET["urun"], $getir, 250, 500);
                                    $sayfaSayisi = ceil(count(totalUrunCekWithAdFiyat($db_connection, $_GET["urun"], 250, 500))) / 12;
                                }
                                if ($_GET["a"] == 4) {
                                    $urunler = urunCekWithAdFiyat($db_connection, $_GET["urun"], $getir, 500, 1000);
                                    $sayfaSayisi = ceil(count(totalUrunCekWithAdFiyat($db_connection, $_GET["urun"], 500, 1000))) / 12;
                                }
                                if ($_GET["a"] == 5) {
                                    $urunler = urunCekWithAdFiyat($db_connection, $_GET["urun"], $getir, 1000, 2500);
                                    $sayfaSayisi = ceil(count(totalUrunCekWithAdFiyat($db_connection, $_GET["urun"], 1000, 2500))) / 12;
                                }
                                if ($_GET["a"] == 6) {
                                    $urunler = urunCekWithAdFiyat($db_connection, $_GET["urun"], $getir, 2500, 5000);
                                    $sayfaSayisi = ceil(count(totalUrunCekWithAdFiyat($db_connection, $_GET["urun"], 2500, 5000))) / 12;
                                }
                                if ($_GET["a"] == 7) {
                                    $urunler = urunCekWithAdFiyat($db_connection, $_GET["urun"], $getir, 5000, 10000);
                                    $sayfaSayisi = ceil(count(totalUrunCekWithAdFiyat($db_connection, $_GET["urun"], 5000, 10000))) / 12;
                                }
                                if ($_GET["a"] == 8) {
                                    $urunler = urunCekWithAdFiyat($db_connection, $_GET["urun"], $getir, 10000, 9999999999);
                                    $sayfaSayisi = ceil(count(totalUrunCekWithAdFiyat($db_connection, $_GET["urun"], 10000, 9999999999))) / 12;
                                }
                            } else {

                                $urunler = urunCekWithAd($db_connection, $_GET["urun"], $getir);
                                $totalUrun = totalUrunCekWithAd($db_connection, $_GET["urun"]);
                                $sayfaSayisi = ceil(count($totalUrun) / 12);

                            }

                        } else {
                            echo "Kategori Bulunamadı";
                        }
                    }
                    $sayac = 0;
                    foreach ($urunler as $row) {
                        $sayac++;
                        ?>
                            <div id="sample" class="col-3 text-center <?php if ($sayac > 4) { echo "mt20";} ?>">
                                <a href="urunDetay.php?uid=<?php echo $row["urun_id"]; ?>">
                                    <div class="product">
                                        <?php if ($row["urunIndirim"] > 0) { ?> <div class="off bg-success" style="width: 90px;">%<?php echo $row["urunIndirim"] ?> indirim</div>
                                            <?php } $urunResimler = resimCek($db_connection, $row["urun_id"]); if (isset($urunResimler[0][0]) == null) { ?>
                                            <div class="text-center"><img src="img/no_img.png" style="object-fit: contain;" width="200"></div>
                                            <?php } else { ?>
                                            <div class="text-center"><img src="<?php echo substr($urunResimler[0][0], "3", strlen($urunResimler[0][0])); ?>" style="object-fit: contain;" width="200"></div>
                                        <?php } ?>
                                        <div class="about text-center">
                                            <h6><?php echo mb_substr($row["urunAd"], 0, 50) . "..."; ?></h6>
                                            <?php if($row["urunIndirim"]){ ?>
                                                <span  class="indirimOncesi"><?php echo $row["urunFiyat"]; ?> TL</span>
                                                <span  class="indirimSonraki"><?php echo $row["urunFiyat"] - ($row["urunFiyat"] / 100 * $row["urunIndirim"]); ?> TL</span>
                                            <?php } else { ?>
                                                <span class="yaziBoyutu20"><?php echo $row["urunFiyat"] - ($row["urunFiyat"] / 100 * $row["urunIndirim"]); ?> TL</span>

                                            <?php } ?>

                                        </div>
                                        <div class="cart-button mt-3 px-2 d-flex align-items-center"> <!-- justify-content-between   -->
                                            <a style="z-index: 5;" type="button" class="btn btn-primary sepetE" idd="<?php echo $row["urun_id"]; ?>">Sepete Ekle</a>
                                          <!--  <div class="add"><span class="product_fav"><i class="fa fa-heart"></i></span><span class="product_fav"><i class="fa fa-cart-plus"></i></span></div>-->
                                        </div>
                                    </div>
                                </a>
                            </div>
                    <?php } ?>

                </div>
            </div>
        </div>

        <!-- Sayfalar Başlangıç -->
        <?php
        if (isset($_GET["kid"])) {
            ?>
            <div class="container mt20">
                <div class="row justify-content-center">
                    <div class="col-6 offset-6">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination text-center">
                                <?php for ($i = 1; $i < $sayfaSayisi + 1; $i++) { ?>
                                    <li class="page-item <?php if (isset($_GET['s'])) {
                                        if ($i == $_GET['s']) {
                                            echo "active";
                                        }
                                    } else {
                                        if ($i == 1) {
                                            echo "active";
                                        }
                                    } ?>"><a class="page-link"
                                             href="?kid=<?php echo $_GET['kid']; ?>&s=<?php echo $i;
                                             if (isset($_GET['a'])) {
                                                 echo '&a=' . $_GET['a'];
                                             } ?>"><?php echo $i; ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <?php
        } else if (isset($_GET["urun"])) {
            ?>
            <div class="container mt20">
                <div class="row justify-content-center">
                    <div class="col-6 offset-6">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination text-center">
                                <?php for ($i = 1; $i < $sayfaSayisi + 1; $i++) { ?>
                                    <li class="page-item <?php if (isset($_GET['s'])) {
                                        if ($i == $_GET['s']) {
                                            echo "active";
                                        }
                                    } else {
                                        if ($i == 1) {
                                            echo "active";
                                        }
                                    } ?>"><a class="page-link"
                                             href="?urun=<?php echo $_GET['urun']; ?>&s=<?php echo $i;
                                             if (isset($_GET['a'])) {
                                                 echo '&a=' . $_GET['a'];
                                             } ?>"><?php echo $i; ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
        <!-- Sayfalar Bitiş -->
    </div>

</div>
<!-- Sol Menü Bitiş -->

<!-- Footer Başlangıç-->
<?php require_once "footer.php"; ?>
<!-- Footer Bitiş-->

<script type="text/javascript">


    $.urlParam = function (name) {
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results == null) {
            return null;
        }
        return decodeURI(results[1]) || 0;
    }


    $("#1").change(function () {
        if (this.checked) {
            var x = window.location.href.replace("&a=1", "");
            x = x.replace("&s=" + $.urlParam('s'), "&s=1");
            x = x.replace("&a=2", "");
            x = x.replace("&a=3", "");
            x = x.replace("&a=4", "");
            x = x.replace("&a=5", "");
            x = x.replace("&a=6", "");
            x = x.replace("&a=7", "");
            x = x.replace("&a=8", "");
            window.location.href = x + '&a=1';
        } else {
            var x = window.location.href.replace("&a=1", "");
            $(location).attr('href', x)
        }
    });
    $("#2").change(function () {
        if (this.checked) {
            var x = window.location.href.replace("&a=1", "");
            x = x.replace("&s=" + $.urlParam('s'), "&s=1");
            x = x.replace("&a=2", "");
            x = x.replace("&a=3", "");
            x = x.replace("&a=4", "");
            x = x.replace("&a=5", "");
            x = x.replace("&a=6", "");
            x = x.replace("&a=7", "");
            x = x.replace("&a=8", "");
            window.location.href = x + '&a=2';
        } else {
            var x = window.location.href.replace("&a=2", "");
            $(location).attr('href', x)
        }
    });
    $("#3").change(function () {
        if (this.checked) {
            var x = window.location.href.replace("&a=1", "");
            x = x.replace("&s=" + $.urlParam('s'), "&s=1");
            x = x.replace("&a=2", "");
            x = x.replace("&a=3", "");
            x = x.replace("&a=4", "");
            x = x.replace("&a=5", "");
            x = x.replace("&a=6", "");
            x = x.replace("&a=7", "");
            x = x.replace("&a=8", "");
            window.location.href = x + '&a=3';
        } else {
            var x = window.location.href.replace("&a=3", "");
            $(location).attr('href', x)
        }
    });
    $("#4").change(function () {
        if (this.checked) {
            var x = window.location.href.replace("&a=1", "");
            x = x.replace("&s=" + $.urlParam('s'), "&s=1");
            x = x.replace("&a=2", "");
            x = x.replace("&a=3", "");
            x = x.replace("&a=4", "");
            x = x.replace("&a=5", "");
            x = x.replace("&a=6", "");
            x = x.replace("&a=7", "");
            x = x.replace("&a=8", "");
            window.location.href = x + '&a=4';
        } else {
            var x = window.location.href.replace("&a=4", "");
            $(location).attr('href', x)
        }
    });
    $("#5").change(function () {
        if (this.checked) {
            var x = window.location.href.replace("&a=1", "");
            x = x.replace("&s=" + $.urlParam('s'), "&s=1");
            x = x.replace("&a=2", "");
            x = x.replace("&a=3", "");
            x = x.replace("&a=4", "");
            x = x.replace("&a=5", "");
            x = x.replace("&a=6", "");
            x = x.replace("&a=7", "");
            x = x.replace("&a=8", "");
            window.location.href = x + '&a=5';
        } else {
            var x = window.location.href.replace("&a=5", "");
            $(location).attr('href', x)
        }
    });
    $("#6").change(function () {
        if (this.checked) {
            var x = window.location.href.replace("&a=1", "");
            x = x.replace("&s=" + $.urlParam('s'), "&s=1");
            x = x.replace("&a=2", "");
            x = x.replace("&a=3", "");
            x = x.replace("&a=4", "");
            x = x.replace("&a=5", "");
            x = x.replace("&a=6", "");
            x = x.replace("&a=7", "");
            x = x.replace("&a=8", "");
            window.location.href = x + '&a=6';
        } else {
            var x = window.location.href.replace("&a=6", "");
            $(location).attr('href', x)
        }
    });
    $("#7").change(function () {
        if (this.checked) {
            var x = window.location.href.replace("&a=1", "");
            x = x.replace("&s=" + $.urlParam('s'), "&s=1");
            x = x.replace("&a=2", "");
            x = x.replace("&a=3", "");
            x = x.replace("&a=4", "");
            x = x.replace("&a=5", "");
            x = x.replace("&a=6", "");
            x = x.replace("&a=7", "");
            x = x.replace("&a=8", "");
            window.location.href = x + '&a=7';
        } else {
            var x = window.location.href.replace("&a=7", "");
            $(location).attr('href', x)
        }
    });
    $("#8").change(function () {
        if (this.checked) {
            var x = window.location.href.replace("&a=1", "");
            x = x.replace("&s=" + $.urlParam('s'), "&s=1");
            x = x.replace("&a=2", "");
            x = x.replace("&a=3", "");
            x = x.replace("&a=4", "");
            x = x.replace("&a=5", "");
            x = x.replace("&a=6", "");
            x = x.replace("&a=7", "");
            x = x.replace("&a=8", "");
            window.location.href = x + '&a=8';
        } else {
            var x = window.location.href.replace("&a=8", "");
            $(location).attr('href', x)
        }
    });


</script>

</body>
</html>