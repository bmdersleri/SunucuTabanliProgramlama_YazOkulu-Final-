<?php require 'include/database.php'; ?>




<!DOCTYPE html>
<html>
<head>
   <title>Giriş Yap</title>
   <link rel="stylesheet" type="text/css" href="girisyap/style.css">
</head>
<body>
   <form action="login.php" method="post">
     <h2>Giriş Yap</h2>
     <?php if (isset($_GET['error'])) {?>
       <p class="error"><?php echo $_GET['error']; ?></p>
    <?php }?>


     <label>Kullanıcı Adı</label>
     <input type="text" name="uname" placeholder="Kullanıcı Adı">

     <label>Şifre</label>
     <input type="text" name="password" placeholder="Şifre">

     <button type="submit">Giriş Yap</button>
   </form>
</body>
</html>
