<?php
include('../../functions/functions.php');

if (isset($_SESSION['id'])) {
    if (isset($_POST['valueTitle'])) {
        $result = addValues($mysqli);
        if ($result) {
            $_SESSION['success'] = "Successfully added";
            header("Location:" . $_SERVER['HTTP_REFERER']);
        } else {
            $_SESSION['error'] = "Failed to add data";
            header("Location:" . $_SERVER['HTTP_REFERER']);
        }
    }
} else {
    echo "You are not authorized to access this page";
}