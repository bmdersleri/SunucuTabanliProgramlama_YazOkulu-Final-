<?php


function usersOnly($redirect = '/index.php')
{
  if (empty($_SESSION['id'])) {
    $_SESSION['message'] = 'Önce giriş yapmalısın!';
    $_SESSION['type'] = 'error';
    header('location: ' . BASE_URL . $redirect);
    exit(0);
  }
}

function adminOnly($redirect = '/index.php')
{
  if (empty($_SESSION['id']) || $_SESSION['kullaniciRol'] === 1) {
    $_SESSION['message'] = 'Bunu görmeye yetkin yok!';
    $_SESSION['type'] = 'error';
    header('location: ' . BASE_URL . $redirect);
    exit(0);
  }
}

function guestsOnly($redirect = '/index.php')
{
  if (isset($_SESSION['id'])) {
    header('location: ' . BASE_URL . $redirect);
    exit(0);
  }
}
