<?php
include('path.php');
include(ROOT_PATH . "/app/controllers/topics.php");

$posts = selectAll('posts', ['published' => 1]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anasayfa</title>
  <link rel="stylesheet" href="./assets/css/tailwind.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/ef21085440.js" crossorigin="anonymous"></script>
  <link rel="icon" type="image/x-icon" href="favicon.ico">


  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-1SL9022MB2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-1SL9022MB2');
  </script>


</head>

<body class="flex flex-col min-h-screen" style="font-family: 'Rubik', sans-serif;">

  <!-- header -->
  <?php include(ROOT_PATH . "/app/components/header.php"); ?>

  <!-- blog section -->
  <div class="content container mx-auto flex-grow" style="width: 900px;">

    <!-- status message -->
    <?php include(ROOT_PATH . '/app/components/message.php') ?>
    <!-- posts -->
    <div class="posts px-5">

      <?php foreach ($posts as $post) : ?>

        <!-- post -->
        <div class="post my-5 flex flex-row border-b-2 border-r-2 bg-gray-100 bg-opacity-75 rounded-lg shadow">
          <div class="post-thumbnail-image">
            <a href="post.php?id=<?php echo $post['id']; ?>">
              <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="pt-4 pl-4 pb-1 w-full h-full">
            </a>
          </div>
          <div class="post-entry px-8 pt-4 flex-grow" style="max-width: 450px;">
            <h1 class="font-normal text-2xl hover:underline">
              <a href="post.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a>
            </h1>
            <span class="text-gray-400 text-justify"><?php echo date("d-m-Y", strtotime($post['created_at'])); ?></span>
            <p><?php echo html_entity_decode(substr($post['body'], 0, 425) . "..."); ?>
              <br>
              <a href="post.php?id=<?php echo $post['id']; ?>" class="text-blue-800 font-semibold hover:underline">
                Devamını Oku...
              </a>
            </p>
          </div>
        </div>

      <?php endforeach; ?>


    </div>
  </div>


  <!-- footer -->
  <?php include(ROOT_PATH . "/app/components/footer.php"); ?>

</body>


</html>