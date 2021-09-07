<?php


function validateTopic($topic)
{
  $errors = array();

  if (empty($topic['name'])) {
    array_push($errors, 'Konu adı alanı boş bırakılamaz!');
  }

  $existingTopic = selectOne('topics', ['name' => $topic['name']]);
  if ($existingTopic) {
    if (isset($topic['update-topics-btn']) && $existingTopic['id'] != $topic['id']) {
      array_push($errors, 'Bu konu daha önce oluşturulmuş!');
    }

    if (isset($topic['create-topics-btn'])) {
      array_push($errors, 'Bu konu daha önce oluşturulmuş!');
    }
  }

  return $errors;
}
