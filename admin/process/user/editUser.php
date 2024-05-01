<?php
  include('../../functions/functions.php');

if (isset($_SESSION['id'])) {
  if (isset($_POST['firstName'])) {
    $result = editUser($mysqli);
    echo $result;
  if ($result) {
    $_SESSION['success'] = "Successfully updated";
    header("Location:" . $_SERVER['HTTP_REFERER']);
  } else {
    $_SESSION['error'] = "Failed to update";
    header("Location:" . $_SERVER['HTTP_REFERER']);
  }
}
} else {
    echo "You are not authorized to access this page";
}