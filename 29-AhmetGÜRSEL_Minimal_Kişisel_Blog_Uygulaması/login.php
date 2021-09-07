<?php include('path.php') ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
// $errors = array();
guestsOnly();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kullanıcı Girişi</title>
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

  <!-- login -->

  <div class="flex-grow">
    <div class="login flex items-center justify-center mt-24">
      <div class="bg-gray-100 flex flex-col w-80 border-b-2 border-r-2 rounded-lg px-8 py-10">
        <div>
          <h1 class="font-bold text-3xl">Kullanıcı Girişi</h1>
          <p class="font-semibold">Lütfen Giriş Yapınız..</p>

          <!-- error -->
          <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>

        </div>
        <form method="POST" action="login.php" class="flex flex-col space-y-8 mt-10">
          <input type="text" name="kullaniciAdi" value="<?php echo $kullaniciAdi; ?>" placeholder="Kullanıcı Adı" class="border rounded-lg py-3 px-3 bg-gray-300 border-gray-400 bg-opacity-50 placeholder-gray-500">
          <input type="password" name="kullaniciSifre" value="<?php echo $kullaniciSifre; ?>" placeholder="Şifre" class="border rounded-lg py-3 px-3 bg-gray-300 border-gray-400 bg-opacity-50 placeholder-gray-500">
          <input type="submit" name="login-btn" value="Giriş Yap" class="border border-gray-400 rounded-lg m-auto py-4 px-8 font-semibold bg-gray-200 shadow-md hover:bg-gray-300 font-bold">
          <a href="<?php echo BASE_URL . '/register.php' ?>" class="mx-auto text-gray-500 text-blue-800 hover:underline">Kayıt Ol</a>
        </form>
      </div>
    </div>
  </div>

  <!-- footer -->
  <?php include(ROOT_PATH . "/app/components/footer.php"); ?>

</body>


</html>