<?php
include('../../functions/functions.php');

if (isset($_SESSION['id'])) {

    if (isset($_POST['title'])) {

        $result = addNewsEventArticle($mysqli, 'newsevent');

        echo json_encode($result);

        // if ($result) {
        //     $_SESSION['success'] = "Article successfully added";
        //     header("Location:" . $_SERVER['HTTP_REFERER']);
        // } else {
        //     $_SESSION['error'] = "Failed to add article";
        //     header("Location:" . $_SERVER['HTTP_REFERER']);
        // }
    }
} else {
    echo "You are not authorized to access this page";
}
