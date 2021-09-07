<?php 
$user=  $_SESSION['user_login'];
  $corepage = explode('/', $_SERVER['PHP_SELF']);
    $corepage = end($corepage);
    if ($corepage!=='index.php') {
      if ($corepage==$corepage) {
        $corepage = explode('.', $corepage);
       header('Location: index.php?page='.$corepage[0]);
     }
    }
?>
<h1 class="text-primary"><i class="fas fa-user"></i>  Yönetici Profili</h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
     <li class="breadcrumb-item" aria-current="page"><a href="index.php">Gösterge Paneli </a></li>
     <li class="breadcrumb-item active" aria-current="page">Profiliniz</li>
  </ol>
</nav>
<?php 
  $query = mysqli_query($db_con, "SELECT * FROM `users` WHERE `username` ='$user';");
  $row = mysqli_fetch_array($query);

 ?>
<div class="row">
  <div class="col-sm-6">
    <table class="table table-bordered">
      <tr>
        <td>Kullanıcı ID</td>
        <td><?php echo $row['id']; ?></td>
      </tr>
      <tr>
        <td>İsim</td>
        <td><?php echo ucwords($row['name']); ?></td>
      </tr>
      <tr>
        <td>E-posta</td>
        <td><?php echo $row['email']; ?></td>
      </tr>
      <tr>
        <td>Kullanıcı Adı</td>
        <td><?php echo ucwords($row['username']); ?></td>
      </tr>
      <tr>
        <td>Durum</td>
        <td><?php echo ucwords($row['status']); ?></td>
      </tr>
      <tr>
        <td>Kayıt Tarihi</td>
        <td><?php echo $row['datetime']; ?></td>
      </tr>
    </table>
    <a class="btn btn-warning pull-right" href="index.php?page=edit-user&id=<?php echo base64_encode($row['id']); ?>">Profili Düzenle</a>
  </div>
  <div class="col-sm-6">
    <h3>Profil Fotoğrafı</h3>
    <a href="images/<?php echo $row['photo']; ?>">
      <img class="img-thumbnail" id="imguser" src="images/<?php echo $row['photo']; ?>" width="280px">
    </a>
    <?php 
        if (isset($_POST['upphoto'])) {
          unlink('images/'.$row['photo']);
          $photofile = $_FILES['userphoto']['tmp_name'];
          $upphoto = $user.date('s-m-y-m-Y').$_FILES['userphoto']['name'];
          if (mysqli_query($db_con, "UPDATE `users` SET `photo` = '$upphoto' WHERE `users`.`username` = '$user';")) {
            move_uploaded_file($photofile, 'images/'.$upphoto);
          }else{
            echo "Profil Fotoğrafı Yüklenmedi";
          }
        }
     ?><br>
    <form method="POST" enctype="multipart/form-data">
      <input type="file" name="userphoto" required="" id="photo"><br>
      <input class="btn btn-info" type="submit" name="upphoto" value="Fotoğraf Yükle">
    </form>
  </div>
</div>
