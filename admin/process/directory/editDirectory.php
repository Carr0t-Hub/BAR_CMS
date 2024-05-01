<?php
include('../../functions/functions.php');

if (isset($_SESSION['id'])) {
  if (isset($_POST['email'])) {
    $result = editDirectory($mysqli);
    echo $result;
    if ($result) {
      $_SESSION['success'] = "Successfully added";
      header("Location:" . $_SERVER['HTTP_REFERER']);
    } else {
      $_SESSION['error'] = "Failed to add";
      header("Location:" . $_SERVER['HTTP_REFERER']);
    }
  }
} else {
  echo "You are not authorized to access this page";
}