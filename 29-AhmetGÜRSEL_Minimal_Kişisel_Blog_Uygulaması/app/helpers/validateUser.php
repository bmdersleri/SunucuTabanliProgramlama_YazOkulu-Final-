<?php


function validateUser($user)
{
  $errors = array();

  if (empty($user['kullaniciAdi'])) {
    array_push($errors, 'Kullanıcı adı alanı boş bırakılamaz!');
  }

  if (empty($user['kullaniciSifre'])) {
    array_push($errors, 'Şifre alanı boş bırakılamaz!');
  }

  if (empty($user['kullaniciEmail'])) {
    array_push($errors, 'Mail alanı boş bırakılamaz!');
  }

  if ($user['kullaniciSifre'] !== $user['kullaniciSifreKontrol']) {
    array_push($errors, 'Şifre alanları eşleşmiyor!');
  }

  $existingUser = selectOne('kullanicilar', ['kullaniciEmail' => $user['kullaniciEmail']]);
  if ($existingUser) {
    if (isset($user['update-users-btn']) && $existingUser['id'] != $user['id']) {
      array_push($errors, 'Bu mail adresiyle oluşturulmuş kayıt var!');
    }

    if (isset($user['create-users-btn'])) {
      array_push($errors, 'Bu mail adresiyle oluşturulmuş kayıt var!');
    }
  }

  return $errors;
}


function validateLogin($user)
{
  $errors = array();

  if (empty($user['kullaniciAdi'])) {
    array_push($errors, 'Kullanıcı adı alanı boş bırakılamaz!');
  }

  if (empty($user['kullaniciSifre'])) {
    array_push($errors, 'Şifre alanı boş bırakılamaz!');
  }

  return $errors;
}
