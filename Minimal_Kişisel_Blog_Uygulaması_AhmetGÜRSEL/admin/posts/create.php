<?php
include("../../path.php");
include(ROOT_PATH . "/app/controllers/posts.php");
adminOnly();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gönderi Oluştur</title>
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
      <div class="block text-gray-500 text-3xl mx-auto m-10 px-5 text-center">
        <h1>Gönderi Ekle</h1>
      </div>

      <div>

        <form action="create.php" method="POST" enctype="multipart/form-data" class="flex flex-col space-y-6 mt-10">
          <div class="px-5 w-full mx-auto">
            <!-- error -->
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>
            <label class="block font-semibold mt-5">Gönderi Başlığı</label>
            <input type="text" name="title" value="<?php echo $title; ?>" class="border-2 rounded-lg py-3 px-5 bg-gray-300 bg-opacity-10 placeholder-gray-500 w-full">
          </div>
          <div class="px-5 w-full mx-auto">
            <label class="block font-semibold">Gönderi</label>
            <textarea name="body"><?php echo $body; ?></textarea>
          </div>
          <div class="inline-block relative w-full px-5">
            <select name="topic_id" class="block appearance-none w-full bg-gray-300 bg-opacity-10 border-2 hover:border-gray-300 px-4 py-2 pr-8 rounded-lg shadow leading-tight focus:outline-none focus:shadow-outline">

              <?php foreach ($topics as $key => $topic) : ?>
                <?php if (!empty($topic_id) && $topic_id == $topic['id']) : ?>
                  <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                <?php else : ?>
                  <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                <?php endif; ?>
              <?php endforeach; ?>

            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-7 text-gray-700">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
              </svg>
            </div>
          </div>

          <div class="flex w-full  px-5">
            <label class="w-64 flex flex-col items-center px-3 py-6  rounded-lg shadow-lg tracking-wide border-2 bg-gray-300 bg-opacity-10 cursor-pointer hover:bg-gray-300">
              <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
              </svg>
              <span class="mt-2 text-base leading-normal" id="message">Resim Yükle</span>
              <input type='file' name="image" id="file" class="hidden" onChange="IsInputFileEmpty()" />
            </label>
          </div>
          <div class="px-5 ">
            <input type="submit" name="create-posts-btn" value="Gönderi Ekle" class="float-right border-2 bg-gray-300 bg-opacity-10 rounded-lg m-auto py-2 px-4 font-semibold shadow-md mb-5 hover:bg-gray-300 font-bold">
          </div>
        </form>
      </div>

    </div>
  </div>

  <!-- footer -->
  <?php include(ROOT_PATH . "/app/components/footer.php"); ?>

</body>

<script>
  CKEDITOR.replace('body');

  // resim upload kontrol ve dosya ismi gosterme
  var msg = document.getElementById("message");
  var file = document.getElementById("file");

  function IsInputFileEmpty() {
    if (file.files.length == 0) {
      msg.innerHTML = "Resim Yükle";
    } else {
      msg.innerHTML = file.files[0].name;
    }
  }
</script>


</html>