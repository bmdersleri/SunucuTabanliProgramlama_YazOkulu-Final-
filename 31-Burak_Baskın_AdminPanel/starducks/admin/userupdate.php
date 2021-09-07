<script type="text/javascript" src="../js/sweetalert.min.js"></script>
<?php
$page = "Kullanıcılar";
include('../inc/vt.php');
include('inc/head.php');
include('inc/nav.php');
include('inc/sidebar.php');

$query = $connection->prepare("SELECT * FROM users Where id=:id");
$query->execute(['id' => (int)$_GET["id"]]);
$result = $query->fetch();


if ($_POST) { 

    $username = $_POST['username'];
    $password = md5('56' . $_POST['password'] . '23');
    $passwordrepeat = md5('56' . $_POST['passwordrepeat'] . '23');


    $error = "";


    if ($username <> "" && $password <> "" && $error == "") {
        $satir = [
            'id' => $_GET['id'],
            'username' => $username,
            'password' => $password,


        ];


        if ($password == $passwordrepeat && $password != '' && $username != '') {

            $sql = "UPDATE users SET username=:username,password=:password WHERE id=:id;";
            $durum = $connection->prepare($sql)->execute($satir);

            if ($durum) {
                echo '<script>swal("Başarılı","Güncellendi","success").then((value)=>{ window.location.href = "users.php"});

            </script>';
                
            }
        } else {
            echo '<script>swal("Hata","Hatalı, Lütfen Bilgilerinizi doğru girdiğinizden emin olunuz.","error");</script>';
        }
    }
    if ($error != "") {
        echo '<script>swal("Hata","' . $error . '","error");</script>';
    }
}


?>
<script src="vendor/CKEditor5/ckeditor.js"></script>
<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Kullanıcı Düzenle</li>
        </ol>


        <div class="card mb-3">

            <div class="card-body">

                <form method="post" action="" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Kullanıcı Adı</label>
                        <input required type="text" value="<?= $result["username"] ?>" class="form-control" name="username"
                               placeholder="Üst başlık">
                    </div>

                    <div class="form-group">
                        <label>Yeni password</label>
                        <input required type="text" class="form-control" name="password"
                               placeholder="Yeni password">
                    </div>
                    <div class="form-group">
                        <label>password Tekrar</label>
                        <input required type="text" class="form-control" name="passwordrepeat"
                               placeholder="password Tekrar">
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Güncelle</button>
                    </div>


                </form>


            </div>
        </div>


        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>

