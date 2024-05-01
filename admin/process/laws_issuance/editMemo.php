<?php
  include('../../functions/functions.php');

if (isset($_SESSION['id'])) {
  $result = editSo($mysqli);
  header("Location: ".$_SERVER['HTTP_REFERER']);
} else {
    echo "You are not authorized to access this page";
}