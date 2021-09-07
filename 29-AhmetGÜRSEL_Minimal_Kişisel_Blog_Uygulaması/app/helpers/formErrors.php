<?php if (count($errors) > 0) : ?>
  <div class="mx-auto"">
            <div class=" bg-red-100 border border-red-400 text-red-700 mx-auto rounded relative mt-5 text-center" role="alert">
    <?php foreach ($errors as $error) : ?>
      <span class="block"><?php echo $error; ?></span>
    <?php endforeach; ?>
  </div>
  </div>
<?php endif; ?>