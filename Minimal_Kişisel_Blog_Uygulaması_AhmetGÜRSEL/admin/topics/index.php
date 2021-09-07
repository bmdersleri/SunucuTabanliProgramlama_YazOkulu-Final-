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
  <title>Konuları Yönet</title>
  <link rel="stylesheet" href="../../assets/css/tailwind.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/ef21085440.js" crossorigin="anonymous"></script>

  <link rel="icon" type="image/x-icon" href="../../favicon.ico">
</head>

<body class="flex flex-col min-h-screen" style="font-family: 'Rubik', sans-serif;">

  <!-- admin header -->
  <?php include(ROOT_PATH . '/app/components/adminHeader.php') ?>

  <!-- topics manage section -->
  <div class="content container mx-auto flex-grow" style="width: 900px;">
    <div class="posts px-5">

      <!-- status message -->
      <?php include(ROOT_PATH . '/app/components/message.php') ?>

      <table class="border-none rounded-2xl mt-12 mx-auto w-full">
        <tr>
          <th class="border-b-2 text-left px-8 py-4">No</th>
          <th class="border-b-2 text-left px-8 py-4">İsim</th>
          <th class="border-b-2 text-center px-8 py-4">Düzenle</th>
          <th class="border-b-2 text-center px-8 py-4">Sil</th>
        </tr>

        <?php foreach ($topics as $key => $topic) : ?>
          <tr>
            <td class="border-b-2 px-8 py-4"><?php echo $key + 1; ?></td>
            <td class="border-b-2 px-8 py-4"><?php echo $topic['name'] ?></td>
            <td class="border-b-2 text-center px-8 py-4"><a href="edit.php?id=<?php echo $topic['id']; ?>"><span class="ml-2" style="font-size: 1.2rem;"><i class="fas fa-edit"></i></span></a></td>
            <td class="border-b-2 text-center px-8 py-4"><a href="index.php?del_id=<?php echo $topic['id']; ?>"><span class="ml-2" style="font-size: 1.2rem;"><i class="fas fa-trash-alt"></i></span></a></td>
          </tr>
        <?php endforeach; ?>

      </table>

    </div>
  </div>

  <!-- footer -->
  <?php include(ROOT_PATH . "/app/components/footer.php"); ?>

</body>


</html>