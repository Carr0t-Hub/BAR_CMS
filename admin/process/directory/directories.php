<?php
include('../../functions/functions.php');

if (isset($_POST['firstName'])) {

    $result = addDirectory($mysqli);

    if ($result) {
        $_SESSION['success'] = "Directory successfully added";
    } else {
        $_SESSION['error'] = "Failed to add directory";
    }
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
