<?php

include(ROOT_PATH . "/app/database/dbFunction.php");
include(ROOT_PATH . "/app/helpers/validateTopic.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$table = 'topics';
$errors = array();
$id = '';
$name = '';
$description = '';

$topics = selectAll($table);


if (isset($_POST['create-topics-btn'])) {
  adminOnly();
  $errors = validateTopic($_POST);

  if (count($errors) === 0) {
    unset($_POST['create-topics-btn']);
    $topic_id = create('topics', $_POST);
    $_SESSION['message'] = 'Konu başarılı şekilde oluşturuldu.';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/topics/index.php');
    exit();
  } else {
    $name = $_POST['name'];
    $description = $_POST['description'];
  }
}

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $topic = selectOne($table, ['id' => $id]);
  $id = $topic['id'];
  $name = $topic['name'];
  $description = $topic['description'];
}

if (isset($_GET['del_id'])) {
  adminOnly();
  $id = $_GET['del_id'];
  $count = delete($table, $id);
  $_SESSION['message'] = 'Konu başarılı şekilde silindi.';
  $_SESSION['type'] = 'success';
  header('location: ' . BASE_URL . '/admin/topics/index.php');
  exit();
}

if (isset($_POST['update-topics-btn'])) {
  adminOnly();
  $errors = validateTopic($_POST);

  if (count($errors) === 0) {
    $id_ = $_POST['id'];
    unset($_POST['id'], $_POST['id']);
    unset($_POST['update-topics-btn'], $_POST['update-topics-btn']);
    $topic_id = update($table, $id_, $_POST);
    $_SESSION['message'] = 'Konu başarılı şekilde güncellendi.';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/topics/index.php');
    exit();
  } else {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
  }
}
