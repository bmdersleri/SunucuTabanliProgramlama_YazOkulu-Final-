<!DOCTYPE html>
<html lang="en">
<?php require "static/head.php" ?>
    <body>
        <!-- Navigation-->
        <?php require "static/navigation.php" ?>
        <!-- Page Header-->
        <?php require "static/header.php" ?>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                <?= $icerik ?>
                    

                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="<?=site_url('posts')?>">Older Posts →</a></div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <?php require "static/footer.php" ?>
    </body>
</html>
