<?php
session_start();
require_once '../../service/db.php';

if (isset($_POST['submit_comment'])) {
  $post_id = $_SESSION['post_id'];
  $user_id = $_SESSION['id'];
  $comment = $_POST['comment'];

  $sql = "INSERT INTO comments (post_id, user_id, content) VALUES ($post_id, $user_id, '$comment')";
  $que =$conn->query($sql);

  header('Location: ../../detail.php');
}