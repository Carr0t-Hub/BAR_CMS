<?php
  include('../../functions/functions.php');

if (isset($_SESSION['id'])) {
  if (isset($_POST['type'])) {
    $result = editProcurement($mysqli);
    if ($result) {
      $_SESSION['success'] = "Successfully updated";
      header("Location:" . $_SERVER['HTTP_REFERER']);
    } else {
      $_SESSION['error'] = "Failed to update article";
      header("Location:" . $_SERVER['HTTP_REFERER']);
    }
  } else {
      echo "You are not authorized to access this page";
  }
}