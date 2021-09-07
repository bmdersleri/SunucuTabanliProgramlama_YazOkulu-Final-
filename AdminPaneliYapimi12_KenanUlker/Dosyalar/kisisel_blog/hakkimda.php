<?php include 'header.php'; ?>


<style>
.yazarGorsel{
	border-radius: 10px;
	margin-bottom: 15px;
}
</style>


<section class="section author full-space mb-40 pt-55">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!--widget-author-->
                    <div class="text-center inner-width">
                        <a href="hakkimda" class="image">
                            <img src="<?php echo $yazarData['yazar_img']; ?>" class="yazarGorsel">
                        </a>
                        <h6><span>Merhaba, <?php echo $yazarData['yazar_adi']; ?></span></h6>
                        <p><?php echo $yazarData['yazar_hakkinda']; ?>
                        </p>



                    </div>
                </div>
            </div>
        </div>
    </section>



<?php include 'footer.php'; ?>
