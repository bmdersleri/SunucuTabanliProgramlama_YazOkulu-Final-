<?php include "include/header.php"; ?>

<!-- Navigation -->
<?php include "include/navigation.php" ?>

<!--==========================
    INSIDE HERO SECTION Section
============================-->
<section class="page-image page-image-portfolio md-padding">
    <h1 class="text-white text-center">Galleries</h1>
</section>

<!--==========================
    PORTFOLIO Section
============================-->
<section id="portfolio" class="md-padding">
    <div class="container">

        <div class="row text-center">
            <div class="col-md-4 offset-md-4">
                <div class="section-header">
                    <h2 class="title">Our visited countries</h2>
                </div>
            </div>
        </div>
        <?php
        $sorgu = "SELECT * FROM galleries";
        $select_all_categories = mysqli_query($conn, $sorgu);
        while ($row = mysqli_fetch_assoc($select_all_categories)) {
            $galleries_id = $row["id"];
            $galleries_title = $row["country"];
            $galleries_image = $row["img"];


            echo
            " <div class='row'>
                            <div class='col-md-4 col-sm-6 portfolio-item'>
                                <a href='img/01-full.jpg' class='portfolio-link' data-lightbox='web-design' data-title='Item 1' >
                                    <div class='portfolio-hover'>
                                        <div class='portfolio-hover-content'>
                                            <i class='fas fa-search fa-3x'></i>
                                        </div>
                                    </div>
                                    <img class='img-fluid' src='$galleries_image' alt=''>
                                </a>
                                <div class'portfolio-caption'>
                                    <h4>$galleries_title</h4>
                                </div>
                            </div>
                            </div>
							
							
							";
        }

        ?>

    </div>
</section>
<?php include "include/footer.php"; ?>