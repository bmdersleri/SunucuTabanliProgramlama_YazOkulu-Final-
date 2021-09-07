<?php
require_once "data/select.php"; ?>

<!DOCTYPE html>
<html lang="en">
<?php $title = "Sepetim"; ?>
<?php require_once "header.php"; ?>
<body>
<!-- Wrapper Start -->
<div class="wrapper standart odemeEkrani">
    <div class="container ">
        <div class="row justify-content-center ">
            <div class="col-12 sepetBosEkle mt20">
                <div class="card">

                    <div class="card-body">
                       <div class="row">
                            <div class="col-md-6 offset-1">
                                <div class="left border mt20">
                                    <div class="row"> <span class="header">Payment</span>
                                        <div class="icons" style="text-align: right;"><h3><i class="fab fa-cc-visa"></i> <i class="fab fa-cc-mastercard"></i></h3> </div>
                                    </div>
                                    <form class="mt-10">
                                        <span>Kart Numarası</span> <input maxlength="19" id="credit-card" value="" autocomplete="off" placeholder="•••• •••• •••• ••••">
                                        <span>Kart üzerindeki isim</span> <input placeholder="Kart sahibinin adı ve soyadı">
                                        <div class="row">
                                            <div class="col-4"><span>Son Kullanma Tarihi:</span> <input placeholder="Ay / Yıl"> </div>
                                            <div class="col-4"><span>Güvenlik Kodu:</span> <input id="cvv" placeholder="CVC/CCV"> </div>
                                        </div> <input type="checkbox" id="save_card" class="align-left"> <label for="save_card">Save card details to wallet</label>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="right border mt20">
                                    <div class="header">Order Summary</div>
                                    <hr>
                                    <div class="row lower">
                                        <div class="col text-left">Subtotal</div>
                                        <div class="col text-right">$ 46.98</div>
                                    </div>
                                    <div class="row lower">
                                        <div class="col text-left">Delivery</div>
                                        <div class="col text-right">Free</div>
                                    </div>
                                    <div class="row lower">
                                        <div class="col text-left"><b>Total to pay</b></div>
                                        <div class="col text-right"><b>$ 46.98</b></div>
                                    </div>
                                    <div class="row lower">
                                        <div class="col text-left"><a href="#"><u>Add promo code</u></a></div>
                                    </div> <button class="btn">Place order</button>
                                    <p class="text-muted text-center">Complimentary Shipping & Returns</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div> </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php
require_once "footer.php";
?>

<script type="text/javascript">
    $('#kkn').on('keypress', function() {
        var foo = $(this).val().split(" ").join("");
        if (foo.length > 0) {
            foo = foo.match(new RegExp('.{1,4}', 'g')).join(" ");
        }
        $(this).val(foo);
    });
</script>
</body>
</html>
