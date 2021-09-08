<?php require 'include/database.php';

if(@$_SESSION["oturum"]){
  header("location:index.php");
}
?>
<?php
if ($_POST) {
  $kontrol = $db->prepare("SELECT * FROM login WHERE user_name=:uname AND password=:password");
  $kontrol->execute(["uname" => $_POST["uname"],"password" => $_POST["password"]]);
  if($kontrol->rowCount()){
    $row = $kontrol->fetch(PDO::FETCH_OBJ);
    $_SESSION["oturum"]=true;
    header("Location: anasayfa.php");



  }else {
    header("Location: loginindex.php?error=Kullanıcı adı ya da şifre yanlış.");
    exit();
  }
}
 ?>

 <?php
 if (isset($_POST['uname']) && isset($_POST['password'])) {
      function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      $uname = validate($_POST['uname']);
      $pass = validate($_POST['password']);

      if (empty($uname)) {
        header("Location: loginindex.php?error=Kullanıcı Adınızı giriniz.");
        exit();
      }elseif (empty($pass)) {
        header("Location: loginindex.php?error=Şifrenizi giriniz.");
        exit();
      }else {
        $sql = "SELECT * FROM login WHERE user_name='$uname' AND password='$pass'";
      }
    }else {
      header("Location: loginindex.php");
      exit();
    }

  ?>
