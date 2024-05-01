<?php
include('../../functions/functions.php');

if (isset($_POST['codeNo'])) {

    $result = addSo($mysqli);

    if ($result) {
        $_SESSION['success'] = "Successfully added";
    } else {
        $_SESSION['error'] = "Failed to add";
    }
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
