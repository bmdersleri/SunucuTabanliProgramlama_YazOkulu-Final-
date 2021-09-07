<?php


function validatePost($post)
{
  $errors = array();

  if (empty($post['title'])) {
    array_push($errors, 'Başlık alanı boş bırakılamaz!');
  }

  if (empty($post['body'])) {
    array_push($errors, 'Gönderi alanı boş bırakılamaz!');
  }

  if (empty($post['topic_id'])) {
    array_push($errors, 'Bir konu seçmelisiniz!');
  }


  $existingPost = selectOne('posts', ['title' => $post['title']]);
  if ($existingPost) {
    if (isset($post['update-posts-btn']) && $existingPost['id'] != $post['id']) {
      array_push($errors, 'Bu başlık daha önce oluşturulmuş!');
    }

    if (isset($post['create-posts-btn'])) {
      array_push($errors, 'Bu başlık daha önce oluşturulmuş!');
    }
  }



  return $errors;
}
