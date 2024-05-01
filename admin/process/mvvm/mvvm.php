<?php
include('../../functions/functions.php');

if (isset($_POST['bar_mission'])) {

    $result = updateMVVM($mysqli);

    if ($result) {
        $_SESSION['success'] = "Successfully added";
        header("Location:" . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['error'] = "Failed to add";
        header("Location:" . $_SERVER['HTTP_REFERER']);
    }
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
