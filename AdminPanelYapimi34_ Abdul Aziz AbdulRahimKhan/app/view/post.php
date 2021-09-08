<!DOCTYPE html>
<html lang="en">
<?php require "static/head.php" ?>
    <body>
        <!-- Navigation-->
        <?php require "static/navigation.php" ?>
        <!-- Page Header-->
        <?php require "static/header.php" ?>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <h1 style="text-align: center"><?=($contentFetch['baslik'])?></h1>
                        <p><?=htmlspecialchars_decode($contentFetch['icerik'])?></p>
                    </div>
                </div>
            </div>
        </article>
        <!-- Footer-->
        <?php require "static/footer.php" ?>
    </body>
</html>
