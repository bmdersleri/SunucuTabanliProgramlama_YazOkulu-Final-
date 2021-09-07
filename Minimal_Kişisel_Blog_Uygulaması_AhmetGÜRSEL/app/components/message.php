<?php if (isset($_SESSION['message'])) : ?>
  <div class="mx-auto px-5 mt-10"">
        <div class=" bg-green-100 border border-green-400 text-green-700 mx-auto rounded relative mt-5 text-center" role="alert">
    <span class="block"><?php echo $_SESSION['message']; ?></span>
  </div>
  </div>
  <?php
  unset($_SESSION['message']);
  unset($_SESSION['type']);
  ?>
<?php endif; ?>