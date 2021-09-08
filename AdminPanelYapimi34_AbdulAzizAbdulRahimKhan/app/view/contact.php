<!DOCTYPE html>
<html lang="en">
<?php require "static/head.php" ?>

<body>
    <!-- Navigation-->
    <?php require "static/navigation.php" ?>
    <!-- Page Header-->
    <?php require "static/header.php" ?>
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                <p style='text-align:center;  font-weight: bold; font-size: 30px;'>CONTACT</p>
                <p style='font-weight: bold;'><?=settings('adress-title')?></p>
                <p><span style='font-weight: bold;'>ADRESS: </span><?=settings('adress')?></p>
                <p><span style='font-weight: bold;'>PHONE: </span><?=settings('phone')?></p>
                    <div class="row">
                        <div class="col">
                            <iframe src="<?=settings('adress-location')?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
    </main>
    <!-- Footer-->
    <?php require "static/footer.php" ?>
</body>

</html>