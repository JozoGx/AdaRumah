<?php

require_once '../db.php';
session_start();

if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sqlLogin = "SELECT * FROM users where email='$email' and password='$password'";
  $queLogin = $conn->query($sqlLogin);

  if (mysqli_num_rows($queLogin) > 0) {
    $datas = mysqli_fetch_assoc($queLogin);

    $_SESSION['isLogin'] = true;
    $_SESSION['email'] = $datas['email'];
    $_SESSION['name'] = $datas['name'];

    return header('Location: ../../index.php');
  }
}

