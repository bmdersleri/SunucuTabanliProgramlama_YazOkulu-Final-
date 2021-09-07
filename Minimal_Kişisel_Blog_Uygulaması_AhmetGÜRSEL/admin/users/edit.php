<?php
include("../../path.php");
include(ROOT_PATH . "/app/controllers/users.php");
adminOnly();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kullanıcı Düzenle</title>
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

  <!-- topics create section -->
  <div class="content container mx-auto flex-grow mb-2" style="width: 900px;">
    <div class="posts px-5">
      <!-- error -->
      <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>

      <div class="block text-gray-500 text-3xl mx-auto m-10 px-5 text-center">
        <h1>Kullanıcı Düzenle</h1>
      </div>

      <div>

        <form action="edit.php" method="post" class="flex flex-col space-y-6 mt-10">
          <div class="px-5 w-full mx-auto">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label class="block font-semibold">Kullanıcı Adı</label>
            <input type="text" name="kullaniciAdi" value="<?php echo $kullaniciAdi; ?>" class="border-2 rounded-lg py-3 px-5 bg-gray-300 bg-opacity-10 placeholder-gray-500 w-full">
          </div>
          <div class="px-5 w-full mx-auto">
            <label class="block font-semibold">Email</label>
            <input type="text" name="kullaniciEmail" value="<?php echo $kullaniciEmail; ?>" class="border-2 rounded-lg py-3 px-5 bg-gray-300 bg-opacity-10 placeholder-gray-500 w-full">
          </div>
          <div class="px-5 w-full mx-auto">
            <label class="block font-semibold">Şifre</label>
            <input type="password" name="kullaniciSifre" value="<?php echo $kullaniciSifre; ?>" class="border-2 rounded-lg py-3 px-5 bg-gray-300 bg-opacity-10 placeholder-gray-500 w-full">
          </div>
          <div class="px-5 w-full mx-auto">
            <label class="block font-semibold">Şifre Tekrar</label>
            <input type="password" name="kullaniciSifreKontrol" value="<?php echo $kullaniciSifreKontrol; ?>" class="border-2 rounded-lg py-3 px-5 bg-gray-300 bg-opacity-10 placeholder-gray-500 w-full">
          </div>
          <div class="inline-block relative w-full px-5">
            <select name="kullaniciRol" class="block appearance-none w-full bg-gray-300 bg-opacity-10 border-2 hover:border-gray-300 px-4 py-2 pr-8 rounded-lg shadow leading-tight focus:outline-none focus:shadow-outline">

              <option selected value="0">Admin</option>
              <option value="1">Kullanıcı</option>

            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-7 text-gray-700">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
              </svg>
            </div>
          </div>

          <div class="px-5 ">
            <input type="submit" name="update-users-btn" value="Kullanıcı Güncelle" class="float-right border-2 bg-gray-300 bg-opacity-10 rounded-lg m-auto py-2 px-4 font-semibold shadow-md hover:bg-gray-300 font-bold">
          </div>
        </form>
      </div>

    </div>
  </div>

  <!-- footer -->
  <?php include(ROOT_PATH . "/app/components/footer.php"); ?>

</body>


</html>