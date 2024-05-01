<?php
include('../../functions/functions.php');

if (isset($_POST['firstName'])) {
    $result = addMenu($mysqli);

    if ($result) {
        $_SESSION['success'] = "Successfully added";
    } else {
        $_SESSION['error'] = "Failed to add directory";
    }
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
