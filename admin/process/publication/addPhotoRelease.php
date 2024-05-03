<?php
include('../../functions/functions.php');

// if (isset($_SESSION['id'])) {

if (isset($_POST['title'])) {

    $result = addPhotoRelease($mysqli);


    if ($result) {
        $_SESSION['success'] = "Photo release successfully added";
        echo "success";
    } else {
        $_SESSION['error'] = "Failed to add photo release";
        echo "error";
    }
} else {
    echo "You are not authorized to access this page";
}
