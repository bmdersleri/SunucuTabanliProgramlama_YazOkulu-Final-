<?php
include(ROOT_PATH . "/app/database/dbFunction.php");
include(ROOT_PATH . "/app/helpers/validatePost.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$table = 'posts';

$topics = selectAll('topics');
$posts = selectAll($table);

$errors = array();
$id = "";
$title = "";
$body = "";
$topic_id = "";


if (isset($_GET['id'])) {
  $post = selectOne($table, ['id' => $_GET['id']]);

  $id = $post['id'];
  $title = $post['title'];
  $body = $post['body'];
  $topic_id = $post['topic_id'];
}

if (isset($_POST['create-posts-btn'])) {
  adminOnly();
  $errors = validatePost($_POST);

  if (!empty($_FILES['image']['name'])) {
    $image_name = time() . '_' . $_FILES['image']['name'];
    $destination = ROOT_PATH . "/assets/images/" . $image_name;

    $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

    if ($result) {
      $_POST['image'] = $image_name;
    } else {
      array_push($errors, 'Resim yüklenemedi!');
    }
  } else {
    array_push($errors, "Gönderi için resim yüklemelisiniz!");
  }

  if (count($errors) === 0) {
    unset($_POST['create-posts-btn'], $_POST['create-posts-btn']);
    $_POST['user_id'] = $_SESSION['id'];
    $_POST['published'] = 1;
    $_POST['body'] = htmlentities($_POST['body']);

    $post_id = create($table, $_POST);
    $_SESSION['message'] = "Gönderi başarıyla oluşturuldu.";
    $_SESSION['type'] = "success";
    header('location: ' . BASE_URL . "/admin/posts/index.php");
  } else {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $topic_id = $_POST['topic_id'];
  }
}


if (isset($_POST['update-posts-btn'])) {
  adminOnly();
  $errors = validatePost($_POST);

  if (!empty($_FILES['image']['name'])) {
    $image_name = time() . '_' . $_FILES['image']['name'];
    $destination = ROOT_PATH . "/assets/images/" . $image_name;

    $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

    if ($result) {
      $_POST['image'] = $image_name;
    } else {
      array_push($errors, 'Resim yüklenemedi!');
    }
  } else {
    array_push($errors, "Gönderi için resim yüklemelisiniz!");
  }


  if (count($errors) === 0) {
    $id_ = $_POST['id'];
    unset($_POST['id'], $_POST['id']);
    unset($_POST['update-posts-btn'], $_POST['update-posts-btn']);
    $_POST['user_id'] = 1;
    $_POST['published'] = 1;
    $_POST['body'] = htmlentities($_POST['body']);

    $post_id = update($table, $id_, $_POST);
    $_SESSION['message'] = "Gönderi başarıyla güncellendi.";
    $_SESSION['type'] = "success";
    header('location: ' . BASE_URL . "/admin/posts/index.php");
  } else {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $topic_id = $_POST['topic_id'];
  }
}


if (isset($_GET['del_id'])) {
  adminOnly();
  $id = $_GET['del_id'];
  $count = delete($table, $id);
  $_SESSION['message'] = 'Gönderi başarılı şekilde silindi.';
  $_SESSION['type'] = 'success';
  header('location: ' . BASE_URL . '/admin/posts/index.php');
  exit();
}
