<?php
include("../../path.php");
include(ROOT_PATH . "/app/controllers/topics.php");
adminOnly();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gönderi Düzenle</title>
  <link rel="stylesheet" href="../../assets/css/tailwind.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/ef21085440.js" crossorigin="anonymous"></script>
  <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

  <link rel="icon" type="image/x-icon" href="../../favicon.ico">
</head>

<body class="flex flex-col min-h-screen" style="font-family: 'Rubik', sans-serif;">

  <!-- admin header -->
  <?php include(ROOT_PATH . '/app/components/adminHeader.php') ?>

  <!-- topics create section -->
  <div class="content container mx-auto flex-grow mb-2" style="width: 900px;">
    <div class="posts px-5">
      <!-- error -->
      <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>
      <div class="block text-gray-500 text-3xl mx-auto m-10 px-5 text-center">
        <h1>Konu Düzenle</h1>
      </div>

      <div>

        <form action="edit.php" method="POST" class="flex flex-col space-y-6 mt-10">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <div class="px-5 w-full mx-auto">
            <label class="block font-semibold">Konu İsmini Düzenle</label>
            <input type="text" name="name" value="<?php echo $name; ?>" class="border-2 rounded-lg py-3 px-5 bg-gray-300 bg-opacity-10 placeholder-gray-500 w-full">
          </div>
          <div class="px-5 w-full mx-auto">
            <label class="block font-semibold">Açıklamayı Düzenle</label>
            <textarea name="description"><?php echo $description; ?></textarea>
          </div>
          <div class="px-5 ">
            <input type="submit" name="update-topics-btn" value="Konuyu Düzenle" class="float-right border-2 bg-gray-300 bg-opacity-10 rounded-lg m-auto py-2 px-4 font-semibold shadow-md mb-5 hover:bg-gray-300 font-bold">
          </div>
        </form>
      </div>

    </div>
  </div>

  <!-- footer -->
  <?php include(ROOT_PATH . "/app/components/footer.php"); ?>

</body>

<script>
  CKEDITOR.replace('description');
</script>


</html>