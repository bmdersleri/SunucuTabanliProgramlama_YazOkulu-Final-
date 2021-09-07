<?php include('path.php');
include(ROOT_PATH . "/app/controllers/posts.php");

if (isset($_GET['id'])) {
  $post = selectOne('posts', ['id' => $_GET['id']]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $post['title']; ?></title>
  <link rel="stylesheet" href="./assets/css/tailwind.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/ef21085440.js" crossorigin="anonymous"></script>
  <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>

<body class="flex flex-col min-h-screen" style="font-family: 'Rubik', sans-serif;">

  <!-- header -->
  <?php include(ROOT_PATH . "/app/components/header.php"); ?>

  <!-- post -->
  <div class="content container mx-auto flex-grow" style="width: 900px;">
    <div class="singlePost px-5">

      <div class="title my-5">
        <h1 class="font-semibold text-4xl"><?php echo $post['title'] ?></h1>
        <span class="text-gray-400 text-justify"><?php echo date("d-m-Y", strtotime($post['created_at'])); ?> - Ahmet Gürsel</span>
      </div>

      <div class="post my-5 text-justify">
        <?php echo html_entity_decode($post['body']); ?>
      </div>
    </div>
  </div>

  <!-- footer -->
  <?php include(ROOT_PATH . "/app/components/footer.php"); ?>

</body>


</html>