<!-- Footer-->
<?php
include("inc/vt.php");
$sorgu = $baglanti->prepare("SELECT * FROM linkler");
$sorgu->execute();
$sonuc = $sorgu->fetch();
?>
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-left">Copyright © 2021</div>
            <div class="col-lg-4 my-3 my-lg-0">
                <a class="btn btn-dark btn-social mx-2" href="<?= $sonuc["facebook"] ?>"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="<?= $sonuc["twitter"] ?>"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="<?= $sonuc["instagram"] ?>"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="<?= $sonuc["linkedin"] ?>"><i class="fab fa-linkedin"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="<?= $sonuc["youtube"] ?>"><i class="fab fa-youtube"></i></a>
            </div>
            <div class="col-lg-4 text-lg-right">
                <a class="mr-3" href="#!">Gizlilik Politikası</a>
                <a href="#!">Kullanım Şartları</a>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="assets/mail/jqBootstrapValidation.js"></script>
<!-- Core theme JS-->
</body>

</html>