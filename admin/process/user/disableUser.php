<?php
  include('../../functions/functions.php');

if (isset($_SESSION['id'])) {
  if (isset($_POST['disabled'])) {
    $result = disableUsers($mysqli);
  if ($result) {
    $_SESSION['success'] = "Account Status Updated";
    header("Location:" . $_SERVER['HTTP_REFERER']);
  } else {
    $_SESSION['error'] = "Failed to update";
    header("Location:" . $_SERVER['HTTP_REFERER']);
  }
}
} else {
    echo "You are not authorized to access this page";
}