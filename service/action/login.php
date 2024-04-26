<?php

require_once '../db.php';
session_start();

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sqlLogin = "SELECT * FROM users where username='$username' and password='$password'";
  $queLogin = $conn->query($sqlLogin);

  if (mysqli_num_rows($queLogin) > 0) {
    $datas = mysqli_fetch_assoc($queLogin);

    $_SESSION['username'] = $datas['username'];
    $_SESSION['name'] = $datas['name'];

    return header('Location: ../../index.php');
  }
}

