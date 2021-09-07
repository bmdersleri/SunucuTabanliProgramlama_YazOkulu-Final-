<?php
$page = 'Ürünler';
include('inc/vt.php');
include('inc/head.php');
include('inc/nav.php');


$query = $connection->prepare("SELECT * FROM products");
$query->execute();
$direction = 'right';

while ($result = $query->fetch()) {
    ?>

    <section class="page-section">
        <div class="container">
            <div class="product-item">
                <div class="product-item-title d-flex">
                    <div class="bg-faded p-5 d-flex <?php echo $direction == 'right' ? 'ml-auto' : 'mr-auto' ?> rounded">
                        <h2 class="section-heading mb-0">
                            <span class="section-heading-upper"><?= $result['header'] ?></span>
                            <span class="section-heading-lower"><?= $result['title'] ?></span>
                        </h2>
                    </div>
                </div>
                <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0"
                     src="img/<?= $result['photo'] ?>" alt="">
                <div class="product-item-description d-flex <?php echo $direction == 'right' ? 'mr-auto' : 'ml-auto' ?>">
                    <div class="bg-faded p-5 rounded">
                        <?= $result['content'] ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
    if ($direction == 'right') $direction = 'left';
    else $direction = 'right';

} //while sonu
include('inc/footer.php');
?>
