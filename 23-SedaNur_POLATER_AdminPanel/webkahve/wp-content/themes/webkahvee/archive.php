<!-- Blog yazılarının yazıldığı yer-->
<?php get_header(); ?>

<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-md-9">
            <!-- Kategorinin başlığını yazıyoruz -->
        <h1 class="pb-5"><?php single_cat_title(); ?></h1>
    <?php if(have_posts()) : while (have_posts()) : the_post() ?>
    <h3><?php the_title(); ?></h3>

    <!-- Görseli sola alıp yazıyı sağa alan kodlamalar -->
    <div class="row">
    <div class="col-md-2">
        <!-- Resim ekleme -->
         <?php if(has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url('small');?>" class="img-fluid pt-1 pb-1">
         <?php endif; ?>
    </div>
    <div class="col-md-10">
        <!-- Belli yazıları alır, özet geçme -->
         <?php the_excerpt(); ?>
    </div>
    </div>
        <!-- Blog yazılarının linklerini otomatik olarak alıyoruz -->
        <a class="mb-5 d-block" href="<?php the_permalink(); ?>">Devamını Oku...</a>
    <?php endwhile; endif; ?>
        </div>
        <div class="col-md-3">
    <?php dynamic_sidebar('page_sidebar'); ?></div>
</div>
   
</div>

<?php get_footer(); ?>
