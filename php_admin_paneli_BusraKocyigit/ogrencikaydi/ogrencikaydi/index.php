<?php require_once 'admin/db_con.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/card.css">
    <title>Öğrenci Bilgi Sistemi</title>
  </head>
  <body>
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">

    </div>
  </nav>
  <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">Öğrenci Bilgi Sistemi</a>
      <a class="btn btn-primary float-right" href="admin/login.php"> Yönetici Giriş Yap</a>
  </div>
</nav>
    <div class="container">

    <br>
    <div class="text-center">
      <img src="https://png.pngtree.com/element_our/png_detail/20181208/female-student-icon-png_265422.jpg"  width="200" style ="border-radius: 50%;">
    </div>
          <h3 class="text-center header-text" >Öğrenci Girişi</h3>
          <div class="row">
            <div class="col-md-4 offset-md-4">
              <form class="login" method="POST">
          <select class="form-control" name="choose" style="margin: 15px -10px;">
                     <option value="">
                     Öğrencinin Sınıfı
                     </option>
                     <option value="1.sınıf">
                       1.
                     </option>
                     <option value="2.sınıf">
                       2.
                     </option>
                     <option value="3.sınıf">
                       3.
                     </option>
                     <option value="4.sınıf">
                       4.
                     </option>
                     <option value="5.sınıf">
                       5.
                     </option>
                   </select>
                   <input class="form-control" type="text" pattern="[0-9]{6}" id="roll" placeholder="Öğrencinin Okul Numarası" name="roll">
                   <input class="btn btn-danger" style="background:red" type="submit" value="Giriş Yap" name="showinfo">
          </form>
            </div>
          </div>
        <br>
        <?php if (isset($_POST['showinfo'])) {
          $choose= $_POST['choose'];
          $roll = $_POST['roll'];
          if (!empty($choose && $roll)) {
            $query = mysqli_query($db_con,"SELECT * FROM `student_info` 
            WHERE `roll`='$roll' AND `class`='$choose'");
            if (!empty($row=mysqli_fetch_array($query))) {
              if ($row['roll']==$roll && $choose==$row['class']) {
                $stroll= $row['roll'];
                $stname= $row['name'];
                $stclass= $row['class'];
                $city= $row['city'];
                $photo= $row['photo'];
                $pcontact= $row['pcontact'];
              ?>

<h3 class="text-center">Öğrenci Kişisel Bilgileri</h3>
              <div class="my-2 mx-auto p-relative bg-white 
              shadow-1 blue-hover" style="width: 250px;
               overflow: hidden; border-radius: 1px;">
        <img src="admin/images/<?= isset($photo)
        ?$photo:'';?>" alt="Man with backpack"    
            class="d-block w-full">

  <div class="px-2 py-2">
    <h1 class="ff-serif font-weight-normal text-black card-heading
     mt-0 mb-1" style="line-height: 1.25;">
      <?= isset($stname)?$stname:'';?>
    </h1>

    <p class="mb-1">
    <?= isset($stroll)?$stroll:'';?>
    </p>
    
    <p class="mb-1">
    <?= isset($stclass)?$stclass:'';?>
    </p>
    
    <p class="mb-1">
    <?= isset($city)?$city:'';?>
    </p>
    
    <p class="mb-1">
    <?= isset($pcontact)?$pcontact:'';?>
    </p>
  </div>
</div>
      <?php 
          }else{
                echo '<p style="color:red;">Lütfen Geçerli Bir Okul Numarası Giriniz</p>';
              }
            }else{
              echo '<p style="color:red;">Girişiniz Eşleşmiyor!</p>';
            }
            }else{?>
              <script type="text/javascript">alert("Veri Bulunamadı!");</script>
            <?php }
          }; ?>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>