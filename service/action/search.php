<?php
session_start();

if (isset($_GET['q'])) {
  $_SESSION['query'] = $_GET['q'];
}

header('Location: ../../search.php');

