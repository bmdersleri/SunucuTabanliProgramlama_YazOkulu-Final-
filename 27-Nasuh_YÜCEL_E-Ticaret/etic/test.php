<?php
require_once "data/select.php";
?>


<!DOCTYPE html>
<html lang="en">
<body>


<?php
$title = "Ana Sayfa";
require_once "header.php" ?>

<!-- Wrapper Start -->
<div class="wrapper">


    <div class="col-md-9">
        <div class="row">
            <div class="col-md-3">
                <div class="product"> <div class="off bg-success"><span class="">-25% OFF</span></div>
                    <div class="text-center"> <img src="https://i.imgur.com/nOFet9u.jpg" width="200"> </div>
                    <div class="about text-center">
                        <h5>XRD Active Shoes</h5> <span>$1,999.99</span>
                    </div>
                    <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary text-uppercase">Add to cart</button>
                        <div class="add"> <span class="product_fav"><i class="fa fa-heart"></i></span> <span class="product_fav"><i class="fa fa-cart-plus"></i></span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php
    require_once "footer.php" ?>

</div>

<script type="text/javascript">
    $(function () {
        $("#urunAra").autocomplete({
            source: 'data/select.php',
        });
    });
</script>

</body>
</html>