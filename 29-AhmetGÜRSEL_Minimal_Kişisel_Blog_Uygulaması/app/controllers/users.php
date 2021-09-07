<?php

include(ROOT_PATH . "/app/database/dbFunction.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$table = 'kullanicilar';
$admin_users = selectAll($table, ['kullanicirol' => 0]);

$errors = array();
$kullaniciAdi = '';
$kullaniciSifre = '';
$kullaniciSifreKontrol = '';
$kullaniciEmail = '';

function loginUser($user)
{
  $_SESSION['id'] = $user['id'];
  $_SESSION['kullaniciAdi'] = $user['kullaniciAdi'];
  $_SESSION['kullaniciRol'] = $user['kullaniciRol'];
  $_SESSION['message'] = 'Giriş Başarılı!';
  $_SESSION['type'] = 'success';
  if (!$_SESSION['kullaniciRol']) {
    header('location: ' . BASE_URL . '/admin/dashboard.php');
  } else {
    header('location: ' . BASE_URL . '/index.php');
  }

  exit();
}

// kayit buton kontrol
if (isset($_POST['register-btn'])) {

  $errors = validateUser($_POST);

  if (count($errors) == 0) {
    unset($_POST['register-btn'], $_POST['kullaniciSifreKontrol']);
    $_POST['kullaniciRol'] = 1;
    $_POST['kullaniciSifre'] = password_hash($_POST['kullaniciSifre'], PASSWORD_DEFAULT);

    $user_id = create($table, $_POST);
    $user = selectOne($table, ['id' => $user_id]);

    loginUser($user);
  } else {
    $kullaniciAdi = $_POST['kullaniciAdi'];
    $kullaniciSifre = $_POST['kullaniciSifre'];
    $kullaniciSifreKontrol = $_POST['kullaniciSifreKontrol'];
    $kullaniciEmail = $_POST['kullaniciEmail'];
  }
}

// admin paneli kayit buton kontrol
if (isset($_POST['create-users-btn'])) {
  adminOnly();
  $errors = validateUser($_POST);

  if (count($errors) == 0) {
    unset($_POST['create-users-btn'], $_POST['kullaniciSifreKontrol']);

    $_POST['kullaniciSifre'] = password_hash($_POST['kullaniciSifre'], PASSWORD_DEFAULT);

    $user_id = create($table, $_POST);
    $user = selectOne($table, ['id' => $user_id]);
    $_SESSION['message'] = 'Kullanıcı başarıyla oluşturuldu.';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . "/admin/users/index.php");
    exit();
  } else {
    $kullaniciAdi = $_POST['kullaniciAdi'];
    $kullaniciSifre = $_POST['kullaniciSifre'];
    $kullaniciSifreKontrol = $_POST['kullaniciSifreKontrol'];
    $kullaniciEmail = $_POST['kullaniciEmail'];
  }
}

// giris buton kontrol
if (isset($_POST['login-btn'])) {
  $errors = validateLogin($_POST);

  if (count($errors) === 0) {
    $user = selectOne($table, ['kullaniciAdi' => $_POST['kullaniciAdi']]);

    if ($user && password_verify($_POST['kullaniciSifre'], $user['kullaniciSifre'])) {

      loginUser($user);
    } else {
      array_push($errors, 'Kullanıcı bilgileriniz yanlış!');
      $kullaniciAdi = $_POST['kullaniciAdi'];
      $kullaniciSifre = $_POST['kullaniciSifre'];
    }
  }
}


if (isset($_GET['del_id'])) {
  adminOnly();
  $count = delete($table, $_GET['del_id']);
  $_SESSION['message'] = 'Kullanıcı başarıyla silindi.';
  $_SESSION['type'] = 'success';
  header('location: ' . BASE_URL . "/admin/users/index.php");
  exit();
}

if (isset($_GET['id'])) {
  $user = selectOne($table, ['id' => $_GET['id']]);

  $id = $user['id'];
  $kullaniciAdi = $user['kullaniciAdi'];
  $kullaniciEmail = $user['kullaniciEmail'];
  $kullaniciRol = $user['kullaniciRol'];
}



if (isset($_POST['update-users-btn'])) {
  adminOnly();
  $errors = validateUser($_POST);

  if (count($errors) === 0) {

    $id_ = $_POST['id'];

    unset($_POST['kullaniciSifreKontrol'], $_POST['update-users-btn'], $_POST['id']);
    $_POST['kullaniciSifre'] = password_hash($_POST['kullaniciSifre'], PASSWORD_DEFAULT);


    $count = update($table, $id_, $_POST);
    $_SESSION['message'] = 'Kullanıcı başarıyla güncellendi.';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/users/index.php');
    exit();
  } else {
    $kullaniciAdi = $_POST['kullaniciAdi'];
    $kullaniciSifre = $_POST['kullaniciSifre'];
    $kullaniciSifreKontrol = $_POST['kullaniciSifreKontrol'];
    $kullaniciEmail = $_POST['kullaniciEmail'];
    $kullaniciRol = $_POST['kullaniciRol'];
  }
}
